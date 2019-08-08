<?php

namespace App\Services\Meme;

use App\Lib\Log;
use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Src as MemeSrcModel;
use App\Services\CronService;
use App\Services\Meme\Srcs\Src as MemeSrcsSrcService;
use Carbon\Carbon;
use Throwable;

class Cron extends CronService
{
    public function add(array $items): bool
    {
        foreach ($items as $item) {
            try {
                $service = $this->getSrcService($item->src_alias);
                $model   = $service->format($item);
                if ($service->filter($model)) {
                    $service->store($model);
                }
            } catch (Throwable $e) {
                Log::fileLine(
                    'Failed to add an item. ' .
                    $e->getMessage() . '. ' .
                    print_r($item, true)
                );
            }
        }
        return true;
    }

    public function getSrcService(string $alias): MemeSrcsSrcService
    {
        $class = 'App\Services\Meme\Srcs\\' . ucfirst($alias);
        return new $class();
    }

    public function requestItems(): array
    {
        $items = [];
        foreach (MemeSrcModel::all(['alias', 'request_items_quantity']) as $model) {
            $service = $this->getSrcService($model->alias);
            $items   = array_merge(
                $items,
                $service->requestItems($model->request_items_quantity)
            );
        }
        return $items;
    }

    public function select(): bool
    {
        $models = MemeMemeModel::all()
            ->where('created_at', '<', Carbon::now()->subSeconds(config('app.meme.lifetime')))
            ->where('added', '=', 0);
        foreach ($models as $model) {
            
        }
    }
}

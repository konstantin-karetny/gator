<?php

namespace App\Services\Meme;

use App\Lib\Log;
use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Src as MemeSrcModel;
use App\Services\Meme\Meme as MemeMemeService;
use App\Services\Meme\Srcs\Src as MemeSrcsSrcService;
use App\Services\Service;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Throwable;

class Cron extends Service
{
    public function add(array $items): bool
    {
        $res = [];
        foreach ($items as $item) {
            try {
                $service = $this->getSrcService($item->src_alias);
                $model   = $service->format($item);
                if ($service->filter($model)) {
                    $service->store($model);
                }
            } catch (Throwable $e) {
                Log::fileLineE($e, 'Failed to add an item. ' . print_r($item, true));
                $res[] = false;
            }
        }
        return !in_array(false, $res);
    }

    public function filter(MemeMemeModel $model): bool
    {
        return (bool) $model->likes->count();
    }

    public function getOldMemes(): Collection
    {
        return
            MemeMemeModel::all()
                ->where('created_at', '<', Carbon::now()->subSeconds(config('app.meme.lifetime')))
                ->where('added', '=', 0);
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
        $res    = [];
        $serice = new MemeMemeService();
        foreach ($this->getOldMemes() as $model) {
            if ($this->filter($model)) {
                try {
                    $serice->makePermanent($model);
                } catch (Throwable $e) {
                    Log::fileLineE($e, 'Failed to make a meme permanent. ' . print_r($model->getAttributes(), true));
                    $res[] = false;
                }
            }
            else {
                $model->delete();
            }
        }
        return !in_array(false, $res);
    }
}

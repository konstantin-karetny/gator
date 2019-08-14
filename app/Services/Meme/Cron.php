<?php

namespace App\Services\Meme;

use App\Lib\Log;
use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Src as MemeSrcModel;
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
                if ($service->whetherToAdd($model)) {
                    $service->store($model);
                }
            } catch (Throwable $e) {
                Log::fileLineE($e, 'Failed to add an item. ' . print_r($item, true));
                $res[] = false;
            }
        }
        return !in_array(false, $res);
    }

    public function delete(): bool
    {
        $res = [];
        foreach ($this->getOldMemes() as $model) {
            $service = $this->getSrcService($model->src->alias);
            $res[]   = (
                $service->whetherToDelete($model)
                    ? $service->delete($model)
                    : $service->makePermanent($model)
            );
        }
        return !in_array(false, $res);
    }

    public function getOldMemes(): Collection
    {
        return
            MemeMemeModel
                ::where('created_at', '<', Carbon::now()->subSeconds(config('app.meme.lifetime')))
                ->where('permanent', 0)
                ->get();
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
}

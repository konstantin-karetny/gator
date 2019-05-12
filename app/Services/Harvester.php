<?php

namespace App\Services;

use App\Services\Combines\NineGag as NineGagCombine;

class Harvester
{
    public function exec(string $json): bool
    {
        foreach (json_decode($json, false, 512, JSON_THROW_ON_ERROR) as $raw) {
            try {
                $combine = $this->getCombine($raw->src);
                $item    = $combine->format($raw);
                if ($combine->filter($item)) {
                    //$combine->save($item);
                }
            } catch (\Exception $e) {
                // TODO logging
            }
        }
        return true;
    }

    public function getCombine(string $alias)
    {
        switch (strtolower(trim($alias))) {
            case '9gag':
                return new NineGagCombine();
        }
    }
}
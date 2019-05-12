<?php

namespace App\Services\Combines;

use App\Models\Post as PostModel;
use App\Services\HarvestItem;

abstract class Combine
{
    abstract public function filter(HarvestItem $item): bool;

    abstract public function format($raw): HarvestItem;

    abstract public function save(HarvestItem $item): PostModel;
}
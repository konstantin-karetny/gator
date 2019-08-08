<?php

namespace App\Http\Controllers\Meme;

use App\Http\Controllers\CronController;
use App\Services\Meme\Cron as MemeCronService;

class Cron extends CronController
{
    public function add()
    {
        $service = new MemeCronService();
        $service->add($service->requestItems());
    }

    public function select()
    {
        (new MemeCronService())->select();
    }
}

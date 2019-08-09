<?php

namespace App\Http\Controllers\Meme;

use App\Http\Controllers\CronController;
use App\Services\Meme\Cron as MemeCronService;

class Cron extends CronController
{
    public function add()
    {
        $service       = new MemeCronService();
        $this->success = $service->add($service->requestItems());
    }

    public function select()
    {


        die(var_dump(\App\Models\Meme\Meme::find(1)->getVideoPath()));


        $this->success = (new MemeCronService())->select();
    }
}

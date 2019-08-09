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

    public function delete()
    {
        $this->success = (new MemeCronService())->delete();
    }
}

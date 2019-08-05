<?php

namespace App\Http\Controllers\Meme;

use App\Http\Controllers\Controller;
use App\Services\Meme\Cron as MemeCronService;

class Cron extends Controller
{
    public function add()
    {
        $service = new MemeCronService();
        $service->add($service->getItems());
        echo 'Complete';
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Lib\Log;

class CronController extends Controller
{
    protected $success = true;

    public function __construct()
    {
        set_time_limit(0);
        $message = 'Cron \'' . request()->path() . '\' start';
        echo $message . '<br>';
        Log::fileLine($message, 'notice');
    }

    public function __destruct()
    {
        $message = (
            'Cron \'' . request()->path() . '\' ' .
            ($this->success ? '' : 'UN') . 'successfully complete'
        );
        echo $message;
        Log::fileLine($message, 'notice');
    }
}

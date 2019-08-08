<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Lib\Log;

class CronController extends Controller
{
    public function __construct()
    {
        $message = 'Cron \'' . request()->path() . '\' start';
        echo $message . '<br>';
        Log::fileLine($message, 'notice');
    }

    public function __destruct()
    {
        $message = 'Cron \'' . request()->path() . '\' end';
        echo $message;
        Log::fileLine($message, 'notice');
    }
}

<?php

namespace App\Lib;

use Illuminate\Support\Facades\Log as LogFacade;

class Log extends LogFacade
{
    public static function fileLine(
        string $message,
        string $level   = 'error',
        array  $context = []
    ): void
    {
        $backtrace = reset(debug_backtrace());
        $message  .= '. File ' . $backtrace['file'] . ' line ' . $backtrace['line'];
        static::log($level, $message, $context);
    }
}

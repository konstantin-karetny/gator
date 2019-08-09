<?php

namespace App\Lib;

use Illuminate\Support\Facades\Log as LogFacade;
use Throwable;

class Log extends LogFacade
{
    public static function fileLine(
        string $message,
        string $level   = 'error',
        array  $context = []
    ): void
    {
        $backtrace = reset(debug_backtrace());
        static::log(
            $level,
            $message . '. File ' . $backtrace['file'] . ' line ' . $backtrace['line'],
            $context
        );
    }

    public static function fileLineE(
        Throwable $e,
        string    $message = '',
        string    $level   = 'error',
        array     $context = []
    ): void
    {
        static::log(
            $level,
            $message . '. ' . $e->getMessage() . '. File ' . $e->getFile() . ' line ' . $e->getLine(),
            $context
        );
    }
}

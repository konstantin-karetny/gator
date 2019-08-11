<?php

namespace App\Lib;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log as LogFacade;
use Illuminate\Validation\ValidationException;
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
        $details = '';
        if ($e instanceof ValidationException) {
            $details = trim(implode(', ', Arr::dot($e->errors())), '.');
        }
        static::log(
            $level,
            (
                (!$message ? '' : $message . '. ') .
                trim($e->getMessage(), '.') . '. ' .
                (!$details ? '' : $details . '. ') .
                'File ' . $e->getFile() . ' line ' . $e->getLine()
            ),
            $context
        );
    }
}

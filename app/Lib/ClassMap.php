<?php

namespace App\Lib;

use App\Models\Model;
use App\Services\Service;

class ClassMap
{
    public static function getAlias($class): string
    {
        return strtolower(class_basename($class));
    }

    public static function getBranch($class): string
    {
        return
            strtolower(
                class_basename(
                    preg_replace(
                        '/' . static::getAlias($class) . '$/i',
                        '',
                        is_object($class) ? get_class($class) : $class
                    )
                )
            );
    }

    public static function getModel($class): Model
    {
        $name = static::getModelName($class);
        $args = func_get_args();
        return new $name(...array_splice($args, 1));
    }

    public static function getModelName($class): string
    {
        return
            '\App\Models\\' .
            ucfirst(static::getBranch($class)) . '\\' .
            ucfirst(static::getAlias($class));
    }

    public static function getService($class): Service
    {
        $name = static::getServiceName($class);
        $args = func_get_args();
        return new $name(...array_splice($args, 1));
    }

    public static function getServiceName($class): string
    {
        return
            '\App\Services\\' .
            ucfirst(static::getBranch($class)) . '\\' .
            ucfirst(static::getAlias($class));
    }


    public static function getViewName($class): string
    {
        return
            static::getBranch($class) . '.' .
            static::getAlias($class);
    }
}

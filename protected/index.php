<?php

namespace Ada\Core;

require_once 'vendor/autoload.php';
set_include_path(__DIR__ . '/vendor');
spl_autoload_register();



die(var_dump(

    Type\Cmd::init('asdfaSF!$*)(&(@&$4g'),

    Type\Arr::init([
        'val1' => 1,
        'val2' => 2
    ])

));



Ada\Core\App::init()->exec();

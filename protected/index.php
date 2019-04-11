<?php

require_once 'vendor/autoload.php';
set_include_path(__DIR__ . '/vendor');
spl_autoload_register();

Ada\Core\App::init()->exec();

<?php

set_include_path(
    implode(
        PATH_SEPARATOR,
        [
            get_include_path(),
            dirname(__DIR__)
        ]
    )
);
spl_autoload_extensions('.php');
spl_autoload_register();

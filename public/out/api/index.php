<?php

require_once 'protected/vendor/gator/autoload.php';

$harvest = new Gator\Harvest\Harvest();
die($harvest->exec());

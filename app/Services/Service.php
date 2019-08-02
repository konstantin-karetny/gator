<?php

namespace App\Services;

use App\Services\ClassMap;

class Service
{
    protected
        $alias  = '',
        $branch = '';

    public function __construct()
    {
        $this->alias  = ClassMap::getAlias($this);
        $this->branch = ClassMap::getBranch($this);
    }
}

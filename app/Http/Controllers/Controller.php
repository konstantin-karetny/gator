<?php

namespace App\Http\Controllers;

use App\Services\ClassMap;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use
        AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    protected
        $alias  = '',
        $branch = '';

    public function __construct()
    {
        $this->alias  = ClassMap::getAlias($this);
        $this->branch = ClassMap::getBranch($this);
    }
}

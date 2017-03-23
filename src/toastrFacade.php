<?php

namespace chensuilong\toastr;

use Illuminate\Support\Facades\Facade;

class toastrFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}

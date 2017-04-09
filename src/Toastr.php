<?php
namespace Csl\Toastr;

use Illuminate\Support\Facades\Facade;
class Toastr extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}

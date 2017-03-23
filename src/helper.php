<?php

if (! function_exists('toastr')) {
    /**
     * Return the instance of toastr.
     *
     * @return Rry\toastr\toastr
     */
    function toastr() {
        return app('toastr');
    }
}

<?php

namespace App\Services;

class BookbaseService
{
    /**
     * Get domain based on route
     * @return string
     */
    public static function getDomain(): string
    {
        return request()->routeIs('admin.*') ?
            config('bookbase.admindomain') :
            config('bookbase.studentdomain');
    }
}

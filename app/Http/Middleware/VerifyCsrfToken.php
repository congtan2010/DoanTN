<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'register',
        'login',
        'adminlogin',
        '/admin/quan-ly-xe',
        '/admin/quan-ly-lo-trinh',
        '/admin/quan-ly-ve-xe/17',
        '/admin/quan-ly-ve-xe/3/5',
        '/admin/quan-ly-hang-hoa',
        '/admin/quan-ly-hang-hoa/2',
        '/Dich-vu-van-tai-hang-hoa',
        '/hoa-don/18'

        //
    ];
}

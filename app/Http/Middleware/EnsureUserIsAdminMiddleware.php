<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class EnsureUserIsAdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! $request->user() || $request->user()->isAdmin()) {
            return $request->expectsJson()
                ? abort(403, 'No access')
                : Redirect::guest(URL::route('admin.login'));
        }
        return $next($request);
    }
}

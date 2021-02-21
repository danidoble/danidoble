<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsOrgMember
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check() && (Auth::user()->type === 'administrator' || Auth::user()->type === 'editor')){
            return $next($request);
        }
        abort(401);
        //return response('error',401);
    }
}

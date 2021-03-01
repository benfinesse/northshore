<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Administrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->who === 4){
//            $data = array();
//            $data['seen_last'] = time();
//            Auth::user()->update($data);
            view()->share('person', Auth::user());
            return $next($request);
        }else{
            Auth::logout();
            return redirect(route('cms.signin'));
        } // check if user is authenticated
    }
}

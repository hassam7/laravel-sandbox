<?php

namespace App\Http\Middleware;

use Closure;

class MyMiddleWare
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
        $logged_in = $request->session()->get('loggedin');
        if($logged_in==null){
             return redirect('/restricted');
        }
        
        return $next($request);                    
    }
}

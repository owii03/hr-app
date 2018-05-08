<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
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
		if(Auth::user()->role == "Admin")
		{
			return $next($request); // boleh lanjut ke controllernya
		}
		else{
			return redirect("/home");
		}
		
    }
}









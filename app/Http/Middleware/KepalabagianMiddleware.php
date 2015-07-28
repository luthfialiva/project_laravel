<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class KepalabagianMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if (Auth::User()->role != 2)
        {
            return view('errors.404');
        }
        return $next($request);
	}

}

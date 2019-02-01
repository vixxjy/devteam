<?php

namespace App\Http\Middleware;

use Closure;

class Editor
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
          if (Auth::check() && Auth::user()->role == 'editor') {
                return $next($request);
            }
            elseif (Auth::check() && Auth::user()->role == 'staff') {
                return redirect('/staff');
            }
            else {
                return redirect('/admin');
            }
    }
}

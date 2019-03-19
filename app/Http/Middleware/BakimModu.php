<?php

namespace App\Http\Middleware;

use App\Ayar;
use Closure;
use Illuminate\Support\Facades\Auth;

class BakimModu
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
        $bakim = Ayar::find(1);

        if(Auth::check() ) {
            return $next($request);
        }else {

            //eğer bakım mod evet ise

            return redirect('/bakim');

            //degil ise
            //return $next($request);
        }
    }
}

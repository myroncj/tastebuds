<?php

namespace App\Http\Middleware;

use Closure;

class CheckCustSession
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
      if (!$request->session()->exists('Cid')) {
          // user value cannot be found in session
          $request->session()->flush();
          session()->flash('message','Your Session has expired! Please Login to continue.');
          return redirect('/Cexpire');
      }

      return $next($request);

    }
}

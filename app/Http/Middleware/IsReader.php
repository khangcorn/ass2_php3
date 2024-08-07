<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsReader
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
     /**
      * @var User  $user
      */
      $user = Auth::user();
      if ($request->is('login') || $request->is('register')) {
        return $next($request);
         
      }
    if (!$user) {
        return redirect()->route('login')->with('alert', 'You have to login first');
    }
    if ($user->isMember()) {
        return redirect()->route('home')->with('alert', 'Welcome ' );

    }

        
    }
}

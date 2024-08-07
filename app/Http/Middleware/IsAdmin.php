<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
           /**
            * @var User $user
            */


            $user = Auth::user();
  
            // Check if the route is the login or register page
            if ($request->is('login') || $request->is('register')) {
                return $next($request);
         
            }
        
            if (!$user) {
                // Redirect to login page with an alert message if not authenticated
                return redirect()->route('login')->with('alert', 'You need to be logged in to access this page.');
            }
        
            if (!$user->isAdmin()) {
                // Redirect to login page or another page with an alert message if not an admin
                return redirect()->route('login')->with('permition', 'You do not have the required permissions to access this page!!!');
            }
        
            return $next($request);
        }
}

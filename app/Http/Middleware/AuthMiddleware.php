<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $route = Route::current()->getName();
        $isPublic = in_array($route, ['login', 'signup', 'login.action', 'signup.action']);
        $user = session('user');
        if ($isPublic) {
            if ($user) {
                return redirect()->route('home');
            }
        } else {
            if (!$user) {
                return redirect()->route('login');
            }
        }
        // dd($request->route());
        return $next($request);
    }
}

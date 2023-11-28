<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!empty(Auth::check())) {
            $user = User::where('username', Auth::user()->username)->first();
            $user = User::where('name', Auth::user()->name)->first();
            $user = User::where('email', Auth::user()->email)->first();

            if ($user) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('login');
            }
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }
}

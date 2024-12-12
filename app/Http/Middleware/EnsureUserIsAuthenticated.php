<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class EnsureUserIsAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        info('masuk auth middleware', [Auth::check()]);
         // Jika pengguna belum login, redirect ke halaman login
         if (!Auth::check()) {
            return redirect()->route('auth.login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }

        return $next($request);
    }
}

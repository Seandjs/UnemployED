<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->role === 'admin'){
            return $next($request);
        }
        return redirect('/dashboard');
    }
}

// inin artinya adalah kalau dapet request dari user yang login itu bakal di cek sama yang ini, kalau rolenya itu admin lanjut ke next requestnya, kalau engga itu langsung diarahkan ke dashboard biasa

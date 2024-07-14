<?php

namespace App\Http\Middleware;

use Closure;
use DragonCode\Contracts\Cashier\Auth\Auth as AuthAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class WorkerAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ( Auth::check() && in_array(AuthAuth::user()->hasAnyRole(['worker', 'admin'])) ) {
            return $next($request);
        }  

        return redirect('/')->withErrors(['msg' => 'Acceso no autorizado para esta sección.']);

        return $next($request);
    }
}

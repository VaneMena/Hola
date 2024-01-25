<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$rol): Response
    {
        if($request->user()->rol !== $rol){ 
            if($request->user()->role === 'admin')
            {
                    return redirect('admin/dashboard');
            }
            elseif($request->user()->rol === 'director_academico')
            {
                return redirect('director_academico/dashboard');
            }
            elseif($request->user()->rol === 'user')
            {
                return redirect('dashboard');
            }

        }
        return $next($request);
    }
}

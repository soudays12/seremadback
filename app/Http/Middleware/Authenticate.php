<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->expectsJson()){
            return response()->json(['message' => 'Unauthenticated.'], 401);
        }

        if($request->is('admin*')){
            return redirect()->route('adminauth.login');
        }

        return redirect()->route('auth.login');
    }
}

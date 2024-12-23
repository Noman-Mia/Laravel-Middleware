<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddaleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //check request header
        $key=$request->header('API-KEY');
        if($key=='XYZ123'){
            return $next($request);
        }
        else{
            return response()->json('unAuthorize',401);
        }
        
    }
}

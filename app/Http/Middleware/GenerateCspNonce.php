<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class GenerateCspNonce
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Generate a random nonce
        $nonce = Str::random(16);

        // Share the nonce with all views
        view()->share('cspNonce', $nonce);

        // Add the nonce to the request for further use if needed
        $request->attributes->set('cspNonce', $nonce);

        return $next($request);
    }
}

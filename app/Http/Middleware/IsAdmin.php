<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Check if user is logged in AND is an admin
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request); // Allow access
        }

        // 2. If not, redirect home with an error
        abort(403, 'Unauthorized action.');
    }
}

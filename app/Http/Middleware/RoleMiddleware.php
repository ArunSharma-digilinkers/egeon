<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Not logged in
        if (!auth()->check()) {
            return redirect('/login');
        }

        // Role not allowed
        if (!in_array(auth()->user()->role, $roles)) {
            abort(403, 'Unauthorized access');
        }

        return $next($request);
    }
}

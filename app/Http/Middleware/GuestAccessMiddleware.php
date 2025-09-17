<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GuestAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Set guest user data if no user is authenticated
        if (!session('temp_user')) {
            session(['temp_user' => [
                'id' => 'guest_' . uniqid(),
                'name' => 'Guest User',
                'email' => 'guest@example.com',
                'role' => 'guest',
                'is_guest' => true
            ]]);
        }
        
        return $next($request);
    }
}

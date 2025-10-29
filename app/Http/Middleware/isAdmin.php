<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the user
    $user = Auth::guard('web')->user();

    // Check if user is logged in
    if (!$user) {
        return redirect()->route('login')->withErrors(['error' => 'Please login first.']);
    }

    // Check role
    if ($user->role !== 'admin') {
        return redirect()->route('login')->withErrors(['error' => 'You are not authorized to access admin area.']);
    }
        return $next($request);
    }
}

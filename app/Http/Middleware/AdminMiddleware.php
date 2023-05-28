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
       
        if (Auth::guard('web')->check()) {
            $user = Auth::guard('web')->user();
        
            if ($user->role === '2') {
                // Người dùng có vai trò "admin"
            } else {
                // Người dùng không có vai trò "admin"
            }
        } else {
            // Người dùng chưa đăng nhập
        }
        
        return $next($request);
    }
}

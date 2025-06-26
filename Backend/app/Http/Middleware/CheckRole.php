<?php

namespace App\Http\Middleware;

use App\Utilities\Constant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if (Auth::check()) {
            return response()->json([
                'status' => false,
                'message' => "Unaithorized"
            ], 401);
        }

        if (($role === 'staff' && Auth::user()->level !== Constant::user_level_staff)
            || ($role === 'admin' && Auth::user()->level !== Constant::user_level_admin)
        ) {
            return response()->json([
                'status' => false,
                'message' => 'Forbideen',
            ], 403);
        }



        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $userType = Auth::user()->user_type;
            if ($userType == 1) {
                return $next($request);
            }
        }
        return redirect('/');
    }
}

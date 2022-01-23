<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StudentAuthenticate
{
    private $student;

    public function __construct()
    {
        
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = 'student')
    {
        if (Auth::guard($guard)->check()){
            return $next($request);
        }
        return redirect()->route('frontend.home')->with('error', 'Bạn cần đăng nhập');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){ // Ktra xem đăng nhập hay ch
            if(Auth::user()->role == "1"){
                return $next($request); // route đc ik tiếp
            }else{
                return redirect()->route("login")->with([
                    "message" => "Bạn không có quyền"
                ]);
            }
        }else {
            return redirect()->route("login")->with([
                "message" => "Bạn chưa đăng nhập"
            ]);
        }
        
    }
}

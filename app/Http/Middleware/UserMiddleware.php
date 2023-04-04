<?php

namespace App\Http\Middleware;

use App\Enums\RoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()){
            if (Auth::user()->role==RoleEnum::BLOGGER){

                return $next($request);

            }else{
               // dd(1);
                Auth::logout();
                return redirect('/login')->with('message','Access denied as you are not blogger');

            }
        }else{

            return redirect('/login')->with('message','please log in to access the website info');

        }
        return $next($request);
    }

}

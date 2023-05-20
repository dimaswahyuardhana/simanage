<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginAs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) //, $loginAs
    {
        // dd(Auth::user());
        if (auth()->user()->id_role==1 && auth()->check()){
            dd('admin');
        }

        if (auth()->user()->id_role==2 && auth()->check()){
            dd('employee');
        }

        // if (auth()->user()->loginAs == $loginAs && auth()->check()){
        //     if ($role == 'admin'){
        //         LoginController::registrasiAdmin($id_role = 1);
        //         return redirect()->route('admin.dashboard');
        //     }elseif ($role == 'employee') {
        //         LoginController::registrasiAdmin()
        //     }
        // }


        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Vendeur
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

        if (! Auth::check()) {
            return view('auth.login');

        }
        if (Auth::check()) {
            # code...
            if ( Auth::user()->role ==='vendeur'){
                // return $next($request);
                return redirect()->route('dashboardVendeur');
    
            }
            // else{
            //     return back()->with('status','acces refuse');
            // }
            if ( Auth::user()->role ==='admin'){
                // return $next($request);
                return redirect()->route('dashboardAdmin');
    
            }
        }
       
        abort(404);
    }
}

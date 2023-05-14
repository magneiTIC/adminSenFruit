<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    
    public function redirectTo(){
        switch (Auth::user()->role) {
            case 'admin':
              $this->redirectTo = 'admin';
               return '/dashboardAdmin';
                // return view('admin.index');;
                break;
            case 'vendeur':
                $user=Auth::user();
                $idUser= $user->id;
                $idVendeur=DB::table('vendeurs')->where('user_id',$idUser)->value('id');
                $supp=DB::table('vendeurs')->where('id',$idVendeur)->value('suppression');
                $act=DB::table('vendeurs')->where('id',$idVendeur)->value('activation');
                // dd($supp.$act);
                if ($supp=='oui'){
                    return back()->with('status','compte supprimé');            
                    break;
                }
                else{
                    if($act=="non"){
                        return back()->with('status','votre compte n\'est pas encore actif ');                    //  return view('welcome');
                    }
                    else{
                        $this->redirectTo = 'vendeur';
                        // return view('vendeur.index');
                        return '/dashboardVendeur';

                        break;
                    }
                 }
            default:
            $this->redirectTo = 'home';
            return $this->view('welcome');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
       
        switch (Auth::user()->role) {
            case 'admin':
              $this->redirectTo = 'admin';
               return redirect('/dashboardAdmin');
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
                        return redirect('/dashboardVendeur');

                        break;
                    }
                 }
            default:
            $this->redirectTo = 'home';
            return $this->view('welcome');
            }
    }
}

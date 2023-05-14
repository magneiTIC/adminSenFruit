<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Client;
use App\Models\Vendeur;
use App\Models\LigneVente;
use Models\Administrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nbClient=DB::table('clients')->where('suppression','non')->count() ;
        $nbVendeur=DB::table('vendeurs')->where('suppression','non')->where('activation','oui')->count() ;
        $nbVendeurIn=DB::table('vendeurs')->where('activation','non')->count() ;
        $nbCommande=DB::table('commandes')->where('etat','effectuer')->count() ;

        $fruits= Fruit::all();
        $ligneVentes= LigneVente::all();
        $vendeurs=Vendeur::all();

        $stockBanane=DB::table('ligne_ventes')->where('fruit_id','1')->value('quantiteStock');

        return view('admin.index',compact([
            'nbClient','nbCommande','nbVendeurIn','nbVendeur',
            'fruits','ligneVentes','vendeurs'
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function supp()
    {
        //
        $clientDel=Client::where('suppression', 'oui')->get();
        $vendeurDel=Vendeur::where('suppression', 'oui')->get();

        return view('admin.supp', compact(['clientDel','vendeurDel']));


    }
}

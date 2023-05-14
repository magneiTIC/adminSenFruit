<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Vendeur;
use App\Models\LigneVente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LigneVenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $mois->pivot->quantite
    //   $fruit= $vendeur->fruit;
    //   $fruit->nom;
    //   $fruit->pivot->prix;
    //   $fruit->pivot->quantiteStock;

            $idUserVendeur=Auth::user()->id;
            $ligneVente= LigneVente:: all();
            $idVendeur=DB::table('vendeurs')->where('user_id',$idUserVendeur)->value('id');
            $vendeur= Vendeur::where('user_id',$idUserVendeur)->first();
            $fruits = $vendeur->fruits;
            // $ligneVente1= DB::table('vendeurs')->where('vendeur_id',$idVendeur) ;


            return view('vendeur.fruit.list', compact(['fruits','ligneVente']));
        
    }
    public function page()
    {
        $ligneVente=new LigneVente;
        $fruit= Fruit:: all();
        return view('vendeur.fruit.add', compact(['ligneVente','fruit']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        

        // dd($request);
        $ligneVente= new LigneVente;
        $ligneVente->quantiteEnGros=$request->input('quantiteEnGros');
        $ligneVente->quantiteStock=$request->input('quantite');
        $ligneVente->prixEnGros=$request->input('prixEnGros');
        $ligneVente->prix=$request->input('prix');

        // $fruit=$request->input('fruit');

        $ligneVente->fruit_id=$request->input('fruit');

        
        $idUserVendeur=$request->input('idUserVendeur');
        $idVendeur=DB::table('vendeurs')->where('user_id',$idUserVendeur)->value('id');
        $ligneVente->vendeur_id=$idVendeur;

     
        $ligneVente->save();
        return redirect('/list-ligneVente')->with('status','Ajout fruit reussi');


    }
    public function edit($id){

        $ligneVente= LigneVente::find($id);
        $idFruit=$ligneVente->fruit_id;
        $nomFruit=DB::table('fruits')->where('id',$idFruit)->value('nom');

        return view('vendeur.fruit.edit', compact(['ligneVente','nomFruit']));
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
        $ligneVente= LigneVente:: find($id);
        // dd($request);
        $ligneVente->prix=$request->input('prix');
        $ligneVente->quantiteStock=$request->input('quantite');
        $ligneVente->prixEnGros=$request->input('prixEnGros');
        $ligneVente->quantiteEnGros=$request->input('quantiteEnGros');

        $ligneVente->save();


        
    
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
        $ligneVente= LigneVente:: find($id);
        $ligneVente->delete();
        return redirect('/list-fruit')->with('status','Suppression reussie');

    }
    public function stock(){
        
    }
}

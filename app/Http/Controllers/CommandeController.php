<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Commande;
use App\Models\Livraison;
use App\Models\LigneVente;
use Illuminate\Http\Request;
use App\Models\LigneCommande;
use Illuminate\Support\Facades\DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $commande=Commande::all() ;
        return view('admin.commande.list', compact('commande'));
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
        $commande= Commande::find($id);
        $idClient=$commande->client_id;
        $nomClient=DB::table('clients')->where('id',$idClient)->value('nom');
        $prenomClient=DB::table('clients')->where('id',$idClient)->value('prenom');

        $ligneCommandes=DB::table('ligne_commandes')->where('commande_id',$id)->get();

        $fruits= Fruit::all();
        $livraison=Livraison::all();
        // $livraison=DB::table('livraisons')->where('id',$idClient);

        return view('admin.commande.detail',compact([
            'commande','nomClient',
            'prenomClient','idClient',
            'ligneCommandes','fruits','livraison'
        ]));

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
        $commande= Commande::find($id);
        // $commande->dateCommande=$request->dateCommande;
        // $commande->modePaiement=$request->modePaiement;
        // $commande->client_id=$request->idClient;
        $commande->etat=$request->etat;
        if ($request->etat == "confirmer") {
            $ligneCommandes=LigneCommande::where('commande_id',$id)->get();
            foreach ($ligneCommandes as $lC) {
                $quantite=$lC->quantite;
                $idVendeur=$lC->vendeur_id;
                $idFruit=$lC->fruit_id;
               

                $ligneVente=DB::table('ligne_ventes')->where('fruit_id',$idFruit)->where('vendeur_id',$idVendeur)->get();
                // $ligneVente= LigneVente::where('fruit_id',$idFruit)->where('vendeur_id',$idVendeur)->get();
                foreach ($ligneVente as $lV) {
                    $newQuantiteStock = $lV->quantiteStock - $quantite;
                    DB::table('ligne_ventes')->where('id',$lV->id)->update(['quantiteStock'=>$newQuantiteStock]);
               
                }
            }
        }
        $commande->save();

       

        return redirect('show-commande/'.$id);
        //  view('admin.index');
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
}

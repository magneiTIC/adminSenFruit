<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Fruit;
use App\Models\Vendeur;
use App\Models\LigneVente;
use Illuminate\Http\Request;
use App\Models\LigneCommande;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VendeurController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=Auth::user();
        $idUser= $user->id;
        $idVendeur=DB::table('vendeurs')->where('user_id',$idUser)->value('id');
        $vente=DB::table('ligne_commandes')->where('vendeur_id',$idVendeur)->count();
        // $quantiteVente=DB::table('ligne_commandes')->where('vendeur_id',$idVendeur)->value('quantite')->count();
        // $prixVente=DB::table('ligne_commandes')->where('vendeur_id',$idVendeur)>value('prixTotal')->count();

        $vendeur=Vendeur::where('suppression', 'non')->get();
        return view('admin.vendeur.list', compact(['vendeur','vente']));
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
        $vendeur= new Vendeur;
        $user=new User;

        $user->name=$request->input('nom');
        $user->email=$request->input('email');
        // $user->telephone=$request->input('telephone');
        $mdp="123456";
        $user->password=Hash::make($mdp);
        $user->role="vendeur";

        
        $user->save();

        $vendeur->user_id=$user->id;

        $vendeur->nom=$request->input('nom');
        $vendeur->prenom=$request->input('prenom');
        $vendeur->email=$request->input('email');
        $vendeur->adresse=$request->input('adresse');
        $vendeur->telephone=$request->input('telephone');
        $vendeur->description="";
        $vendeur->notation="";
        $vendeur->CNI=$request->input('CNI');
        $vendeur->save();
        return redirect('/list-vendeur')->with('status','ajout vendeur reussi');

       // ]);
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
        $vendeur= Vendeur::find($id);
        $id_user=$vendeur->user_id;      
        $user= User::find($id_user);        
        $mdp=$user->password;

        $user->name=$request->input('nom');
        $user->email=$request->input('email');
        // $user->email=$request->input('telephone');
        $user->role="vendeur";
        $user->password=$mdp;
        
        $user->save();

        $vendeur->user_id=$user->id;
        $vendeur->nom=$request->input('nom');
        $vendeur->prenom=$request->input('prenom');
        $vendeur->email=$request->input('email');
        $vendeur->telephone=$request->input('telephone');
        $vendeur->description=" ";
        $vendeur->notation=" ";
        $vendeur->activation=$request->input('activation');
        $vendeur->CNI=$request->input('CNI');
        $vendeur->save();
        return redirect('/list-vendeur')->with('status','Modification reussi');
      
    }

    public function updateV(Request $request, $id)
    {
        //       
        $vendeur= Vendeur::find($id);
        $id_user=$vendeur->user_id;   
        $prenom=$vendeur->prenom; 
        $CNI=$vendeur->CNI; 
        $notation=$vendeur->notation; 

        //  dd($notation);   
        $user= User::find($id_user);        
        $mdp=$user->password;
        $nom=$user->name;
        

        $user->email=$request->input('email');
        $user->role="vendeur";
        $user->password=$mdp;
        $user->name=$nom;

        $user->save();

        // $vendeur->user_id=$user->id;
        // $vendeur->nom=$nom;
        // $vendeur->prenom=$prenom;
        // $vendeur->notation=$notation;
        // $vendeur->CNI=$CNI;
        $vendeur->email=$request->input('email');
        $vendeur->adresse=$request->input('adresse');
        $vendeur->telephone=$request->input('telephone');
        $vendeur->description=$request->input('description');
       
        $vendeur->save();
        return redirect('/edit-vendeurV')->with('status','Modification reussi');
      
    }

    public function editV(){
        $user=Auth::user();
        $idUser= $user->id;
        $idVendeur=DB::table('vendeurs')->where('user_id',$idUser)->value('id');
        $vendeur= Vendeur::find($idVendeur);
        return view('vendeur.edit', compact('vendeur'));
    }

    public function edit($id){
        
        $vendeur= Vendeur::find($id);
        return view('admin.vendeur.edit', compact('vendeur'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    //     $vendeur= Vendeur::find($id);
    //     $id_user=$vendeur->user_id;
    //     $user = User::find($id_user);
    //     $vendeur->delete();
    //     $user->delete();
    //     return redirect('/list-vendeur')->with('status','Suppression  reussie');

    // }
    public function delete($id){
        $vendeur= Vendeur::find($id);
        $vendeur->supression="oui";
        $vendeur->save();
        $vendeurDel=Vendeur::where('suppression', 'oui')->get();
    //    return redirect('/list-vendeur-del')->with('status','Suppression  reussie');
        return view('admin.vendeur.del', compact('vendeurDel'));

    }

    public function dashboard(){

        $idUserVendeur=Auth::user()->id;
        $ligneVente= LigneVente:: all();
        $idVendeur=DB::table('vendeurs')->where('user_id',$idUserVendeur)->value('id');
        $vendeur= Vendeur::where('user_id',$idUserVendeur)->first();
        $fruits = $vendeur->fruits;

        $nbCommande=DB::table('ligne_commandes')->where('vendeur_id',$idVendeur)->count();
        $commandes=LigneCommande:: where('vendeur_id',$idVendeur)->get();
        // $commandes=DB::table('ligne_commandes')->where('vendeur_id',$idVendeur);
        $tFruits=Fruit::all();

        return view('vendeur.index',compact(['fruits','nbCommande','commandes','tFruits']) );
    }
}

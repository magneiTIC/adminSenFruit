<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client=Client:: where('suppression', 'non')->get();
        return view('admin.client.list', compact('client'));
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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    //     $client= Client::find($id);
    //     $id_user=$client->user_id;
    //     $user = User::find($id_user);
        
    //     // dd($user);
    //     $client->delete();
    //     $user->delete();
    //     return redirect('/list-client')->with('status','Suppression  reussie');
        public function delete($id){
             $client= Client::find($id);
            //  dd($client);
             $client->suppression="oui";
             $client->update();
             $clientDel=Client::where('suppression', 'oui')->get();
        // return redirect('/list-client-del')->with('status','Suppression  reussie');
        return view('admin.client.del', compact('clientDel'));

        }

}

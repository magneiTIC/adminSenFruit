<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;
use App\Models\FruitDisponible;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;

class FruitController extends Controller{
    
    public function index(){
        $fruit= Fruit::all();
        return view('admin.fruit.list', compact('fruit'));
    }
    public function store (Request $request){

        $filename;
        
        if ($request->hasfile('image')) {
            # code...
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('uploads/fruits/',$filename);
            // $fruit->image=$filename;
        }
             Fruit:: create ([
                 'nom'=>$request->input('nom'),
                 'description'=>$request->input('desc1'),
                 'image'=>$filename,
                ])->mois()->attach($request->mois);

        return redirect('/list-fruit')->with('status','Ajout fruit reussi');
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
        $fruit= Fruit::find($id);
        $filename;
        if ($request->hasfile('image')) {
            $path='uploads/fruits/'.$fruit->image;
            if(File:: exists($path)){
                File::delete($path);
            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('uploads/fruits/',$filename);
            // $fruit->image=$filename;
        }

        $fruit::update ([
            'nom'=>$request->input('nom'),
            'description'=>$request->input('description'),
            'image'=>$filename,
           ])->mois()->attach($request->mois);


        // $fruit->nom=$request->input('nom');
        // $fruit->description=$request->input('description');
        // $fruit->mois=$request->input('mois');
        // $fruit->update();
        return redirect('/list-fruit')->with('status','Modification  reussie');
    }

    public function edit($id){
        $fruit= Fruit::find($id);
        return view('admin.fruit.edit', compact('fruit'));
    
    }
    public function destroy ($id){
        $fruit= Fruit::find($id);
        if ($fruit->image) {
            $path='uploads/fruits/'.$fruit->image;
            if(File:: exists($path)){
                File::delete($path);
            }
        }
        $fruit->delete();
        return redirect('/list-fruit')->with('status','Suppression reussie');

    }
    

}


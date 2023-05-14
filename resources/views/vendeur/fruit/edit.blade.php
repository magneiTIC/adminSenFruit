@extends('layouts.vendeur', ['activePage' => 'edit-ligneVente', 'titlePage' => __('Modification fruit')])

@section('content')
<div class="content">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ url('update-ligneVente/'.$ligneVente->id) }}" autocomplete="off"  enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title ">Ajouter un nouveau fruit</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="idUserVendeur" value="{{Auth::user()->id}}">
                            <br>        
                            <div class="form-group">

                                <label for="exampleFormControlSelect1">Nom Fruit</label>
                                <br>
                                <input class="form-control" type="text" placeholder="{{$nomFruit}}" readonly>

                                {{-- <select name="fruit" class="form-control " data-style="btn btn-link" id="exampleFormControlSelect1">
                                    @foreach ($fruit as $item )
                                        <option value="{{$item->id}}">{{$item->nom}}</option>                                    
                                    @endforeach
                                </select> --}}
                            <br> 

                            <h4>Vente en detail</h4>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Prix/kg</label>
                                <input type="number" class="form-control" id="floatingInput" name="prix" value="">
                            </div>
                            <br>
                            <h4>Vente en gros</h4>

                            <div class="row">
                                <div class="col">
                                    <label for="floatingInput">Quantite en kg</label>
                                    <select class="form-control " name="quantiteEnGros" data-style="btn btn-link" id="exampleFormControlSelect1">
                                     <option value="0" selected>0</option>
                                      <option value="10">10</option>
                                      <option value="20">20</option>
                                      <option value="30">30</option>
                                      <option value="40">40</option>
                                      <option value="50">50</option>
                                      <option value="100">100</option>

                                    </select>
                                  </div>
                                <div class="col">
                                  <label for="floatingInput">Prix</label> 
                                  <input type="text" class="form-control" value="{{$ligneVente->prixEnGros}}" name="prixEnGros" >
                                </div>
                            </div>                                 
                            <br> 
                             <div class="form-floating mb-3">
                                <label for="floatingInput">Quantite en stock en kg</label>
                                <input type="number" class="form-control" id="floatingInput" name="quantite" value="{{$ligneVente->quantite}}">
                            </div>
                            <br> <br>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
                            </div>
                        </div>
                    </div>
               
                </form>
            </div>
            
          </div>
        </div>
      </div>
  </div>
@endsection
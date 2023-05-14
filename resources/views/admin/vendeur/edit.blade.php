@extends('layouts.admin', ['activePage' => 'vendeur-edit', 'titlePage' => __('Modification vendeur')])

@section('content')
<div class="content">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ url('update-vendeur/'.$vendeur->id) }}"  autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title ">Modifier les informations d'un vendeur</h4>
                        </div>
                        <input type="hidden" name="id" value="{{$vendeur->id}}">
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Nom</label>
                                <input type="text" class="form-control" id="floatingInput" name="nom" value="{{$vendeur->nom}}">
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Prenom</label>
                                <input type="text" class="form-control" id="floatingInput" name="prenom" value="{{$vendeur->prenom}}">
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Email </label>
                                <input type="email" class="form-control" id="floatingInput" name="email" value="{{$vendeur->email}}">
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Telephone</label>
                                <input type="number" class="form-control" id="floatingInput" name="telephone" value="{{$vendeur->telephone}}" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput"> Adresse</label>
                                <input type="text" class="form-control" id="floatingInput" name="adresse" value="{{$vendeur->adresse}}">
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput"> CNI</label>
                                <input type="text" class="form-control" id="floatingInput" name="CNI" value="{{$vendeur->CNI}}" >
                            </div>
                           <div>
                            <label for="exampleFormControlTextarea1">Activation</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" value="non" name="activation">
                                   Non
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" value="oui" name="activation">
                                   Oui
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
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










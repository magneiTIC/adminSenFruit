@extends('layouts.admin', ['activePage' => 'vendeur-add', 'titlePage' => __('Ajout vendeur')])

@section('content')
<div class="content">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ url('insert-vendeur') }}"  autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title ">Ajouter un nouveau vendeur</h4>
                        </div>
                        <div class="card-body">
                      
                            <input type="hidden" name="role" value="vendeur">
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Nom</label>
                                <input type="text" class="form-control" id="floatingInput" name="nom" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Prenom</label>
                                <input type="text" class="form-control" id="floatingInput" name="prenom">
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Email </label>
                                <input type="email" class="form-control" id="floatingInput" name="email">
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Telephone</label>
                                <input type="number" class="form-control" id="floatingInput" name="telephone" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput"> Adresse</label>
                                <input type="text" class="form-control" id="floatingInput" name="adresse" >
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput"> CNI</label>
                                <input type="text" class="form-control" id="floatingInput" name="CNI" >
                            </div>
                            {{-- <div class="form-floating">
                                <label for="floatingPassword">Password</label>
                                <input type="password" class="form-control" id="floatingPassword" type="hidden" name="password" value="12345678" >
                            </div> --}}
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










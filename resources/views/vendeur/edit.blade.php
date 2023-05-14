@extends('layouts.vendeur', ['activePage' => 'vendeur-editV', 'titlePage' => __(' ')])

@section('content')
<div class="content">
    <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ url('update-vendeurV/'.$vendeur->id) }}"  autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title ">Modifier vos informations</h4>
                        </div>
                        <input type="hidden" name="id" value="{{$vendeur->id}}">
                        <div class="card-body">
                            {{-- <div class="row">
                                <div class="col-md-12"> --}}

                                    <div class="form-floating mb-3">
                                        {{-- <label for="floatingInput">Nom</label> --}}
                                        <input type="hidden" class="form-control" id="floatingInput" name="nom" value="{{$vendeur->nom}}">
                                    </div>
                                    <div class="form-floating mb-3">
                                        {{-- <label for="floatingInput">Prenom</label> --}}
                                        <input type="hidden" class="form-control" id="floatingInput" name="prenom" value="{{$vendeur->prenom}}">
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
                                        <label for="floatingInput"> Description</label>
                                        <input type="text" class="form-control" id="floatingInput" name="description" value="{{$vendeur->description}}" >
                                    </div>
                                    <input type="hidden" class="form-control" id="floatingInput" name="notation" value="{{$vendeur->notation}}" >
                                    <input type="hidden" class="form-control" id="floatingInput" name="CNI" value="{{$vendeur->CNI}}" >
        
                                    <div class="card-footer ml-auto mr-auto">
                                        <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
                                    </div>


                                    
        
                                {{-- </div>
                            </div>                                                 --}}
                    </div>
               
                </form>
            </div>           
          </div>






          
          <div class="row col-md-12">
            <div class="col-md-12">
              <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
                @csrf
                @method('put')
    
                <div class="card ">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Changer mot de passe') }}</h4>
                  </div>
                  <div class="card-body ">
                    @if (session('status_password'))
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('status_password') }}</span>
                          </div>
                        </div>
                      </div>
                    @endif
                    <div class="row">
                      <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Mot de passe actuel') }}</label>
                      <div class="col-sm-7">
                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password"  value="" required />
                          @if ($errors->has('old_password'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label" for="input-password">{{ __('Nouveau  mot de passe') }}</label>
                      <div class="col-sm-7">
                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                          <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password"  value="" required />
                          @if ($errors->has('password'))
                            <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirmer le nouveau mot de passe ') }}</label>
                      <div class="col-sm-7">
                        <div class="form-group">
                          <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password"  value="" required />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">{{ __('Changer mot de passe ') }}</button>
                  </div>
                  
                </div>
              </form>
            </div>
          </div>

          </div> 
        </div>
      </div>
  </div>
@endsection










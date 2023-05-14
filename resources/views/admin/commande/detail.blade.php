
@extends('layouts.admin', ['activePage' => 'detail', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      {{-- <div class="col-lg-6 col-md-12">
        <form method="post" action="{{ url('update-commande/'.$commande->id) }}" autocomplete="off"  enctype="multipart/form-data" class="form-horizontal">
          @csrf
          
          <div class="card">

            <div class="card-header card-header-primary">
              <h4 class="card-title ">Details de la commande</h4>
            </div>
            <div class="card-body">

                  <div class=" form-floating mb-3">
                      <label class="text-primary" for="floatingInput">ID Commande</label>
                      <input type="text" class="form-control" id="floatingInput" name="id"  value=" {{ $commande->id}}" readonly>
                  </div>

                  <div class="   form-floating mb-3">
                    <label class="text-primary" for="floatingInput">Nom</label>
                    <input type="text" class="form-control" id="floatingInput" name="desc1" value=" {{ $nomClient}}" readonly >
                  </div>
                  <div class="   form-floating mb-3">
                    <label class="text-primary" for="floatingInput">Prenom</label>
                    <input type="text" class="form-control" id="floatingInput" name="desc1" value=" {{ $prenomClient}}" readonly >
                  </div>
                  <div class="   form-floating mb-3">
                    <label class="text-primary" for="floatingInput">Mode de paiement</label>
                    <input type="text" class="form-control" id="floatingInput" name="modePaiement" value=" {{ $commande->modePaiement}}" readonly >
                </div>
                <div class="   form-floating mb-3">
                  <label class="text-primary" for="floatingInput">Date</label>
                  <input type="text" class="form-control" id="floatingInput" name="dateCommande" value=" {{ $commande->dateCommande}}" readonly >
                </div>
                <div class="form-group   form-floating mb-3">
                  <label class="text-primary" for="exampleFormControlSelect2" id="select2">Etat</label>
                    <select name="etat" class="form-control " data-style="btn btn-link" id="exampleFormControlSelect1">
 
                    <option value="{{$commande->etat}}" selected>{{$commande->etat}}</option>
                    <option value="Effectuer" selected>Effectuer</option>
                      <option value="confirmer">Confirmer</option>
                      <option value="enCoursLiv">En cours de livraison </option>
                      <option value="livrer">Livrer</option>  
                      <option value="annuler">Annuler</option>                     
              
                  </select>
              </div>
            </div>             
              <div class="card-footer ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
              </div>

           </div>    
        </form>
       </div>
      </div>   --}}

      <div class="row">
        <div class="col-md-8">
          <div class="card w-75  border-danger" style="background-color: rgba(179, 97, 179, 0.212)" >    
            <div class="card-body">
              <h5 class="card-title text-primary " >Commande no {{$commande->id}} effectuee par {{$prenomClient}} {{$nomClient}}</h5>
              <br>
              <p class="card-text">Date de la commande: {{ $commande->dateCommande}}</p>
              <hr>
              <p class="card-text">Mode de paiement: {{ $commande->modePaiement}}</p>  
              <hr>
              <p class="card-text">Etat de la commande: {{ $commande->etat}}</p>         
        </div>
       </div>
     </div>

      <div class="col-md-4">
        <form method="post" action="{{ url('update-commande/'.$commande->id) }}" autocomplete="off"  enctype="multipart/form-data" class="form-horizontal">
          @csrf
          
          <div class="card">

            <div class="card-header card-header-primary">
              <h4 class="card-title ">Changement de l'etat de la commande</h4>
            </div>
            <div class="card-body">
              <div class="form-group   form-floating mb-3">
                <label class="text-primary" for="exampleFormControlSelect2" id="select2">Etat</label>
                  <select name="etat" class="form-control " data-style="btn btn-link" id="exampleFormControlSelect1">

                  <option value="{{$commande->etat}}" selected>{{$commande->etat}}</option>
                  <option value="Effectuer" >Effectuee</option>
                    <option value="confirmer">Confirmee</option>
                    <option value="enCoursLiv">En cours de livraison </option>
                    <option value="livrer">Livree</option>  
                    <option value="annuler">Annulee</option>                     
            
                </select>
            </div>
          </div>             
            <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
            </div>

          </div>
        </form>  
      </div>

    </div>



    


  
     <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-tabs card-header-primary">
          <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
              <span class="nav-tabs-title">Lignes de commande:</span>
              <ul class="nav nav-tabs" data-tabs="tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#profile" data-toggle="tab">
                    <i class="material-icons">bug_report</i> Bugs
                    <div class="ripple-container"></div>
                  </a>
                </li>

                {{-- <li class="nav-item">
                  <a class="nav-link" href="#messages" data-toggle="tab">
                    <i class="material-icons">code</i> Website
                    <div class="ripple-container"></div>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#settings" data-toggle="tab">
                    <i class="material-icons">cloud</i> Server
                    <div class="ripple-container"></div>
                  </a>
                </li> --}}

                @foreach ($ligneCommandes as $LC)
                {{-- @if($item->nom == 'Citron vert')
                  @continue
                 @endif --}}
                <li class="nav-item">
                  @foreach ($fruits as $fruit )
                    @if($fruit->id == $LC->fruit_id)
                    <a class="nav-link " href="#{{$fruit->nom}}" data-toggle="tab">
                      {{$fruit->nom}}
                      <div class="ripple-container"></div>
                    </a>
                    @endif                    
                  @endforeach
                </li>
              @endforeach


              </ul>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <!-- <div class="tab-pane active" id="profile">
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                    </td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked>
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </td>
                    <td>Create 4 Invisible User Experiences you Never Knew About</td>
                    <td class="td-actions text-right">
                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      </button>
                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">close</i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> -->

            @foreach ($ligneCommandes as $LC)
            @foreach ($fruits as $fruit )
                    @if($fruit->id == $LC->fruit_id)

              <div class="tab-pane" id="{{$fruit->nom}}">
                <table class="table">
                <thead class=" text-primary">
                  <th> Prix</th>
                  <th> Quantite</th>
                  <th> Prix Total</th>
                  <th> Date Livraison</th>
                  <th> Prix Livraison</th>
                  <th> Adresse Livraison</th>
                </thead>
                @foreach ($livraison as $liv)
                  @if($LC->livraison_id == $liv->id)
                <tbody>
                  <td> {{$LC->prix}} </td>
                  <td> {{$LC->quantite}} </td>
                  <td>{{$LC->prixTotal}} </td>
                  <td> {{$liv->dateLivraison}} </td>
                  <td> {{$liv->prix}} </td>
                  <td> {{$liv->adresse}} </td>

                </tbody>
                @endif
                @endforeach
               
                </table>
              </div>
              @endif
            @endforeach
            @endforeach

            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


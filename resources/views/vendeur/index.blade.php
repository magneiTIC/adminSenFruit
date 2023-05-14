@extends('layouts.vendeur', ['activePage' => 'vendeur', 'titlePage' => __(' ')])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                          {{-- <i class="material-icons">store</i> --}}
                          <i class="fa fa-shopping-basket"></i>
            
                        </div>
                        <p class="card-category">Nombre de commandes </p>
                        <h3 class="card-title">{{$nbCommande ?? ''}}</h3>
                    
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">         
                <div class="col-lg-6 col-md-12">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title ">Liste des Commandes</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead class=" text-primary">
                            <th>
                              Fruit
                            </th>          
                            <th>
                              Quantite en kg
                            </th>
                           
                          </thead>
                          <tbody>
                           @foreach($commandes as $commande )
                             <tr>
                                 @foreach ($tFruits as $fruit )
                                     @if($fruit->id == $commande->fruit_id)
                                     <td> {{ $fruit->nom}} </td>
                                     @endif
                                 @endforeach
                               <td> {{ $commande->quantite}} </td>
                             </tr>
                           @endforeach    
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>    
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h4 class="card-title ">Liste des fruits</h4>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table class="table">
                            <thead class=" text-primary">
                              <th>
                                Fruit
                              </th>          
                              <th>
                                Quantite stock
                              </th>
                             
                            </thead>
                            <tbody>
                             @foreach($fruits as $item )
                               <tr>
                                <td> {{ $item->nom}} </td>
                                 <td> {{ $item->pivot->quantiteStock}} </td>
                               </tr>
                             @endforeach    
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>             
            </div>
              
            
        </div>
    </div>



      @endsection
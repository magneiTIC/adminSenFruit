@extends('layouts.vendeur', ['activePage' => 'fruit-list', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Liste des Fruits</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nom
                  </th>
                   {{-- <th>
                    Description
                  </th> --}}
                  <th>
                    Mois
                  </th>
                  <th>
                    Image
                  </th>
                  <th>
                    Prix/kg
                  </th>
                  <th>
                    Quantite en gros
                  </th>
                  <th>
                    Prix en Gros 
                  </th>
                  <th>
                    Quantite stock
                  </th>
                  <th>
                   Action
                  </th>
                </thead>
                <tbody>
                 @foreach($fruits  as $item )
                   <tr>
                    <td> {{ $item->nom}} </td>
                    {{-- <td> {{ $item->description}} </td> --}}
                    <td> 
                    @foreach ( $item->mois as $mois)              
                   {{$mois->nom}}|
                    @endforeach
                  </td>
                    {{-- <td> {{ $item->mois->nom}} </td>                    --}}
                    <td>
                      <img src="{{ asset('uploads/fruits/'.$item->image) }}" width="100" height="80" alt="image Fruit"> 
                     </td>
                     <td> {{ $item->pivot->prix}} </td> 
                     {{-- <td> {{ $item->pivot->quantiteEnGros}} </td> 
                     <td> {{ $item->pivot->prixEnGros}} </td>  --}}
                     {{-- <td>0</td>
                     <td>0</td> --}}

                    <td>10</td>
                    <td>10000</td>

                     
                     <td> {{ $item->pivot->quantiteStock}} </td>
                     <td> 
                      <a href="{{url('edit-ligneVente/'.$item->pivot->id)}}" class="btn btn-primary btn-link btn-sm "> 
                       <i class="material-icons" title="Modifier">edit</i>
                     </a>
                     <a href="{{url('delete-ligneVente/'.$item->pivot->id)}}" class="btn btn-danger btn-link btn-sm">
                       <i class="material-icons" title="Supprimer">close</i>
                     </a>
                  </td>
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
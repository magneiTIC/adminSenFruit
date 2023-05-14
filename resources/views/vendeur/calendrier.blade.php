@extends('layouts.vendeur', ['activePage' => 'calendrier', 'titlePage' => __('Calendrier des fruits')])

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
                    Janvier
                  </th>
                   <th>
                    Fevrier
                  </th>
                  <th>
                    Mars
                  </th>
                  <th>
                    Avril
                  </th>
                </thead>
                <tbody>
                  @if ($mois=='Janvier') 
                  <td>{{ $mois->fruits}}</td>
                  @endif 
                </tbody>
              </table>
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Mai
                  </th>
                   <th>
                    Juin
                  </th>
                  <th>
                    Juillet
                  </th>
                  <th>
                    Auout
                  </th>
                </thead>
                <tbody>
                 {{-- @foreach($fruit  as $item )
                   <tr>
                    <td> {{ $item->nom}} </td>
                    <td> {{ $item->description}} </td>
                    <td> {{ $item->mois}} </td>                   
                    <td>
                      <img src="{{ asset('uploads/fruits/'.$item->image) }}" width="100" height="80" alt="image Fruit"> 
                     </td>
                     <td> {{ $item->pivot->quantiteStock}} </td>
                     <td> {{ $item->pivot->prix}} </td> 
                     
                     <td> 
                      <a href="{{url('edit-ligneVente/'.$item->id)}}" class="btn btn-primary btn-link btn-sm "> 
                       <i class="material-icons" title="Modifier">edit</i>
                     </a>
                     <a href="{{url('delete-ligneVente/'.$item->id)}}" class="btn btn-danger btn-link btn-sm">
                       <i class="material-icons" title="Supprimer">close</i>
                     </a>
                  </td>
                   </tr>
                 @endforeach     --}}
                </tbody>
              </table>
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Septembre
                  </th>
                   <th>
                    Octobre
                  </th>
                  <th>
                    Novembre
                  </th>
                  <th>
                    Decembre
                  </th>
                </thead>
                <tbody>
                 {{-- @foreach($fruit  as $item )
                   <tr>
                    <td> {{ $item->nom}} </td>
                    <td> {{ $item->description}} </td>
                    <td> {{ $item->mois}} </td>                   
                    <td>
                      <img src="{{ asset('uploads/fruits/'.$item->image) }}" width="100" height="80" alt="image Fruit"> 
                     </td>
                     <td> {{ $item->pivot->quantiteStock}} </td>
                     <td> {{ $item->pivot->prix}} </td> 
                     
                     <td> 
                      <a href="{{url('edit-ligneVente/'.$item->id)}}" class="btn btn-primary btn-link btn-sm "> 
                       <i class="material-icons" title="Modifier">edit</i>
                     </a>
                     <a href="{{url('delete-ligneVente/'.$item->id)}}" class="btn btn-danger btn-link btn-sm">
                       <i class="material-icons" title="Supprimer">close</i>
                     </a>
                  </td>
                   </tr>
                 @endforeach     --}}
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
                {{-- <tbody>
                    @foreach($fruit as $item)
                    <tr>
                     <td> {{ $item->nom}} </td>
                     <td> {{ $item->description}} </td>
                     <td>
                        <img src="{{ asset('uploads/fruits/'.$item->image) }}" width="100" height="80" alt="image Fruit"> 
                     </td>
                     <td>
                        <ul>
                            @foreach ( $item->mois as $mois)                      
                                <li>{{$mois->nom}}</li>                     
                            @endforeach
                        </ul>
                     </td>
                   </tr>
              </tbody> --}}
            
@extends('layouts.admin', ['activePage' => 'vendeur-list', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid">
  
    <div class="row">
      <div class="col-md-12">
        
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Liste des vendeurs</h4>

          </div>
          <div class="card-body">
            <div class="input-group-append"  style="float: right">
              <a href="{{url('add-vendeur')}}" class="btn btn-outline-primary ">
                Ajout vendeur 
                <i class="material-icons">person_add</i>
              </a>
              
            </div>
            <br>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th >
                    ID
                  </th>
                  <th>
                    Nom
                  </th>
                  <th>
                    Prenom
                  </th>
                  <th >
                    Email
                  </th>
                  <th>
                    Telephone
                  </th>
                  <th >
                    CNI
                  </th>
                  <th>
                    Activation
                  </th>
                  <th style="text-align: center">
                       Actions
                  </th>
                
                </thead>
                <tbody>
                  @foreach($vendeur as $item)
                  <tr>
                   <td> {{ $item->id}} </td>
                   <td> {{ $item->nom}} </td>
                   <td> {{ $item->prenom}} </td>
                   <td> {{ $item->email}} </td>
                   <td> {{ $item->telephone}} </td>
                   <td> {{ $item->CNI}} </td>
                   <td style="text-align: center"> {{ $item->activation}} </td>
                   <td > 
                       <a href="{{url('edit-vendeur/'.$item->id)}}" class="btn btn-primary btn-link btn-sm "> 
                        <i class="material-icons" title="Modifier">edit</i>
                        {{-- <i class="fa fa-pencil" title="Modifier"></i> --}}

                      </a>
                      <a href="{{url('delete-vendeur/'.$item->id)}}" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons" title="Supprimer">close</i>
                        {{-- <i class="fa fa-times" title="Supprimer"></i> --}}

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
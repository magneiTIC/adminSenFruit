@extends('layouts.admin', ['activePage' => 'client-list', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Liste des clients</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Nom
                  </th>
                  <th>
                    Prenom
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Telephone
                  </th>
                  <th >
                    Action
                  </th>
                
                </thead>
                <tbody>
                  @foreach($client as $item)
                  <tr>
                   <td> {{ $item->id}} </td>
                   <td> {{ $item->nom}} </td>
                   <td> {{ $item->prenom}} </td>
                   <td> {{ $item->email}} </td>
                   <td> {{ $item->telephone}} </td>
                  </td>
                   <td>            
                    <a href="{{url('delete-client/'.$item->id)}}" class="btn btn-danger btn-link btn-sm">
                      {{-- <i class="material-icons" title="Supprimer" >close</i> --}}
                      <i class="fa fa-times" title="Supprimer" ></i>

                    </a>          
                    {{-- <a href="{{url('delete-client/'.$item->id)}}" class="btn btn-danger small">Supprimer</a> --}}
                    {{-- <button class="btn btn-danger"  > small </button>  --}}
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

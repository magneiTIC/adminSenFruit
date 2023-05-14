
@extends('layouts.admin', ['activePage' => 'commande-list', 'titlePage' => __('')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Liste des commandes</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID 
                  </th>
                  <th>
                    Mode de paiement
                  </th>
                  <th>
                    Date
                  </th>
                  <th>
                    Etat
                  </th>
                  <th>
                    
                  </th>
                </thead>
                <tbody>
                  @foreach($commande as $item)
                  <tr>
                   <td> {{ $item->id}} </td>
                   <td> {{ $item->modePaiement}} </td>
                   <td> {{ $item->dateCommande}} </td>
                   <td> {{ $item->etat}} </td>

                    <td > 
							      	<a href="{{url('show-commande/'.$item->id)}}" class="btn btn-primary">Detail</a>
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
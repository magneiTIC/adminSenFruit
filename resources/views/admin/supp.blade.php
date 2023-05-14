@extends('layouts.admin', ['activePage' => 'supp', 'titlePage' => __('Les comptes supprimés')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Liste des clients supprimés</h4>
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
                 
                
                </thead>
                <tbody>
                  @foreach($clientDel as $item)
                  <tr>
                   <td> {{ $item->id}} </td>
                   <td> {{ $item->nom}} </td>
                   <td> {{ $item->prenom}} </td>
                   <td> {{ $item->email}} </td>
                   <td> {{ $item->telephone}} </td>
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

    <div class="row">
        <div class="col-md-12">
          
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Liste des vendeurs supprimés</h4>
  
            </div>
            <div class="card-body">
              <div class="input-group-append"  style="float: right">
                
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
                    <th>
                      Email
                    </th>
                    <th>
                      Telephone
                    </th>
                    <th>
                      CNI
                    </th>
                  
                  </thead>
                  <tbody>
                    @foreach($vendeurDel as $item)
                    <tr>
                     <td> {{ $item->id}} </td>
                     <td> {{ $item->nom}} </td>
                     <td> {{ $item->prenom}} </td>
                     <td> {{ $item->email}} </td>
                     <td> {{ $item->telephone}} </td>
                     <td> {{ $item->CNI}} </td>                
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

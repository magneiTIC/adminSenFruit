@extends('layouts.admin', ['activePage' => 'client-list-del', 'titlePage' => __('  ')])

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
  </div>
</div>
@endsection

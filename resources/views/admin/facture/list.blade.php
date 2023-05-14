
@extends('layouts.admin', ['activePage' => 'facture-list', 'titlePage' => __('Liste factures')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Liste des factures</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID Facture
                  </th>
                  <th>
                    ID Commande
                  </th>
                  <th>
                    Nom Client
                  </th>
                  <th>
                    Montant
                  </th>
                  <th>
                    Mode de Paiement
                  </th>
                  <th>
                    Date
                  </th>
                  <th>
                    
                  </th>
                
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                       1 
                    </td>
                    <td>
                        fatou mbaye
                    </td>
                    <td>
                      10000
                    </td>
                    <td>
                     wave
                    </td>
                    <td>
                       21-05-2021
                       </td>
                    <td > 
                    
                    </td>
                  </tr>      
                  
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
@extends('layouts.admin', ['activePage' => 'fruit-list', 'titlePage' => __(' ')])

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
            <div class="input-group-append"  style="float: right">
              <a href="{{url('add-fruit')}}" class="btn btn-outline-primary " >
                Ajout fruit 
                <i class="material-icons">store</i>
              </a>
            </div>

          <div class="card-body">
            {{-- <div class="table-responsive">
              <table class="table">


                <colgroup>
                  <col class="border border-purple" span="6" style="border-radius: 0.3rem">
                </colgroup>


                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Nom
                  </th>
                   <th>
                    Description
                  </th>
                  <th>
                    Mois
                  </th>
                  <th>
                    Image
                  </th>
                  <th>
                   Action
                  </th>
                </thead>
                <tbody>
                 @foreach($fruit as $item)
                   <tr>
                    <td> {{ $item->id}} </td>
                    <td> {{ $item->nom}} </td>
                    <td> {{ $item->description}} </td>
                    <td>
                      <ul>
                    @foreach ( $item->mois as $mois)
                      
                        <li>{{$mois->nom}}</li>
                     
                    @endforeach
                  </ul>
                  </td>

                    <td>
                      <img src="{{ asset('uploads/fruits/'.$item->image) }}" width="100" height="80" alt="image Fruit"> 
                     </td>
                     <td> 
                      <a href="{{url('edit-fruit/'.$item->id)}}" class="btn btn-primary btn-link btn-sm "> 
                       <i class="material-icons" title="Modifier">edit</i>
                     </a>
                     <a href="{{url('delete-fruit/'.$item->id)}}" class="btn btn-danger btn-link btn-sm">
                       <i class="material-icons" title="Supprimer">close</i>
                     </a>
                  </td>
                   </tr>
                 @endforeach    
                </tbody>
              </table>
              
            </div>
          </div>
           --}}

           {{-- @foreach($fruit as $item)
         
           <td> {{ $item->id}} </td>
           <td> {{ $item->nom}} </td>
           <td> {{ $item->description}} </td>
           <td>
             <ul>
           @foreach ( $item->mois as $mois)
             
               <li>{{$mois->nom}}</li>
            
           @endforeach  --}}

           @foreach($fruit as $item)

           <div class="card w-75  border-danger" style="background-color: rgba(223, 215, 223, 0.212)" >
           
            <div class="card-body">
              <h5 class="card-title text-primary " >{{ $item->nom}}</h5>
              <br>
              <p class="card-text">{{ $item->description}}</p>
              <hr>
            <div class="row">
              <div class="col">
                @foreach ( $item->mois as $mois)              
                {{$mois->nom}} |
                @endforeach
            </div>
            <div class="col" >
              <img src="{{ asset('uploads/fruits/'.$item->image) }}" width="100" height="100" alt="image Fruit"> 
            
              <a href="{{url('edit-fruit/'.$item->id)}}" class="btn btn-primary btn-link btn-sm "> 
                <i class="material-icons" title="Modifier">edit</i>
              </a>
              <a href="{{url('delete-fruit/'.$item->id)}}" class="btn btn-danger btn-link btn-sm">
                <i class="material-icons" title="Supprimer">close</i>
              </a>
            </div>
          </div>            
            </div>
          </div>
          @endforeach
            </div>
            <br> <br>
        </div>
      </div>
     
    </div>
  </div>
</div>
@endsection

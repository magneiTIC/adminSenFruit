@extends('layouts.admin', ['activePage' => 'fruit-edit', 'titlePage' => __(' ')])

@section('content')
<div class="content">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ url('update-fruit/'.$fruit->id) }}" autocomplete="off"  enctype="multipart/form-data" class="form-horizontal">
                    @csrf                    
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title ">Modifier un fruit</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Nom</label>
                                <input type="text" class="form-control" id="floatingInput" name="nom" value="{{$fruit->nom}}">
                            </div>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Description</label>
                                <input type="text" class="form-control" id="floatingInput" name="description" value="{{$fruit->description}}">
                            </div>
                           
                            {{-- <div class="form-group">
                              <label for="">Mois</label> <br>
                              {{-- <select multiple class="form-control selectpicker" name="mois[]" data-style="btn btn-link" id="exampleFormControlSelect1" > --}}
                              <select multiple="multiple" style="height: 80px" name="mois[]" class="form-control selectpicker" data-style="btn btn-link" id="exampleFormControlSelect1">
  
                                  <option value="1">Janvier</option>
                                  <option value="2">Fevrier</option>
                                  <option value="3">Mars</option>
                                  <option value="4">Avril</option>
                                  <option value="5">Mai</option>
                                  <option value="6">Juin</option>
                                  <option value="7">Juillet</option>
                                  <option value="8">Aout</option>
                                  <option value="9">Mars</option>
                                  <option value="10">Octobre</option>
                                  <option value="11">Novembre</option>
                                  <option value="12">Decembre</option> 
                              </select>
                          {{-- </div> --}} 

                        

                            <br> <br>

                        {{-- <div class="mois">
                          
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Janvier" name="mois">
                                <label class="form-check-label" for="inlineCheckbox1">Janvier</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Fevrier" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">Fevrier</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Mars" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">Mars</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Avril" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">Avril</label>
                              </div> 
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Mai" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">Mai</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Juin" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">Juin</label>
                              </div>
                        </div> --}}
                        {{-- <div class="mois">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Juillet" name="mois">
                                <label class="form-check-label" for="inlineCheckbox1">Juillet</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Aout" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">  Aout</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Septembre" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">Septembre</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Octobre" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">Octobre</label>
                              </div> 
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Novembre" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">Novembre</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Decembre" name="mois">
                                <label class="form-check-label" for="inlineCheckbox2">Decembre</label>
                              </div>
                        </div> --}}
                        <br> <br>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="1" name="mois[]">
                             Janvier
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="2" name="mois[]">
                           fevrier
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="3"name="mois[]">
                         fevrier
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                      </label>
                  </div>
                        @if ($fruit->image)
                            <img src="{{asset('uploads/fruits/'.$fruit->image)}}" height="45%" width="45%" alt="Image Fruit">
                        @endif
                        <div class="form-floating mb-3">
                            <label for="floatingInput">Image </label>
                            <input type="file" class="form-control" id="floatingInput" name="image">
                        </div>
                            <br> <br>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Enregistrer') }}</button>
                            </div>

                        </div>
                    </div>
               
                </form>
            </div>
            
          </div>
        </div>
      </div>
  </div>
@endsection
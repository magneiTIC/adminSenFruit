@extends('layouts.admin', ['activePage' => 'fruit-add', 'titlePage' => __(' ')])

@section('content')
<div class="content">
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ url('insert-fruit') }}" autocomplete="off"  enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title ">Ajouter un nouveau fruit</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Nom</label>
                                <input type="text" class="form-control" id="floatingInput" name="nom" >
                            </div>

                            {{-- <div class="form-floating mb-3">
                              <label for="floatingInput">Description</label>
                              <input type="text" class="form-control" id="floatingInput" name="desc1" >
                          </div> --}}

                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc1"></textarea>
                          </div>

                          <br> 
                        <div class="row"> 
                          <div class="col">
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
                                 Fevrier
                                  <span class="form-check-sign">
                                      <span class="check"></span>
                                  </span>
                              </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="3"name="mois[]">
                               Mars
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="4"name="mois[]">
                             Avril
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                            </label>
                          </div>
                    </div>

                    <div class="col">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="5" name="mois[]">
                               Mai
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="6" name="mois[]">
                             Juin
                              <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                          </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="7"name="mois[]">
                           Juillet
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="8"name="mois[]">
                         Aout
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                        </label>
                      </div>
                </div>

                <div class="col">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="9" name="mois[]">
                           Septembre
                            <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                        </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="10" name="mois[]">
                         Octobre
                          <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                      </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="11"name="mois[]">
                       Nonvembre
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="12"name="mois[]">
                     Decembre
                      <span class="form-check-sign">
                          <span class="check"></span>
                      </span>
                    </label>
                  </div>
            </div>


                        </div>

                      

                          {{-- <select multiple="multiple" class="js-example-basic-multiple" name="mois[]" data-style="btn btn-link" id="exampleFormControlSelect1" > --}}

                          {{-- <div class="form-group">                            
                            <label for="">Mois</label> <br>                         
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
                        </div> --}}
                        <br>

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
@push("scripts")
<script>
//     $(document).ready(function() {
//     $('.js-example-basic-multiple').select2();
// });
$('.js-example-basic-multiple').select2();
</script>
@endpush

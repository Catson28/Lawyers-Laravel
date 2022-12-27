<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Your Website Title</title>
    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ ('Assets_cs/modal_cs/css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ ('Assets_cs/style_cs_2019.css') }}" />

</head>
<body>
    <div class="container">
      <div class="modal-body agend-body" style=" height: 400px;">
        <div class="pull-left agend-steps" style=" height: 400px;">
          <div class="agend-nav-container" style=" height: 310px;">
            <ul class="nav flex-column nav-pills agend-nav-list" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <li class="agend-nav-item">
                <a class="nav-link active agend-nav-link show" id="v-pills-sel-lawyers" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Advogados (s)</a>
              </li>
              <li class="agend-nav-item">
                <a class="nav-link agend-nav-link disabled" id="v-pills-Cost" data-toggle="pill" href="#v-pills-servpack" role="tab" aria-controls="v-pills-servpack" aria-selected="false"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Cliente</a>
              </li>
              <li class="agend-nav-item">
                <a class="nav-link agend-nav-link disabled" id="v-pills-personal" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Pessoas</a>
              </li>
              <li class="agend-nav-item">
                <a class="nav-link agend-nav-link disabled" id="v-pills-conclusion-tab" data-toggle="pill" href="#v-pills-conclusion" role="tab" aria-controls="v-pills-conclusion" aria-selected="false"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Concluir</a>
              </li>
            </ul>         
          </div>
          <div class="agend-progress-container">
            <div class="progress progress-striped">
              <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="10" aria-valuemax="60">
              </div>
            </div>
          </div>
        </div>

        <form class="form-horizontal">
          <div class="agend-card-container tab-content" id="v-pills-tabContent" style=" height: 326px; display: block;">

              <div class="agend-card tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-sel-lawyers" style="max-width: none;overflow-y: scroll;height: inherit;">
                <div class="d-none alert alert-warning alert-dismissible fade show celebraty" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="alert-heading">Well done!</h4>
                  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                  <hr>
                  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>


                <div class="radio">
                  <label for="content col">
                    Eu Mesmo.
                  </label>
                  <div class="d-none alert alert-danger clsEM" role="alert">
                    This is a danger alert—check it out!
                  </div>
                </div>

                <div class="radio">
                  <label for="content col">
                    <fieldset>
                      <div class="form-row">
                        <div class="col-md-10 col-lg-10">
                          <select class="form-control input-sm" name="id_pessoas" id="EOP_pessoa">
                            <option selected="selected" disabled="selected">Escolha a Pessoa</option>
                            <!-- ______________________________________________________________________________ -->
                          </select>
                        </div>
                        <div class="col-md-2 col-lg-2">
                          <button type="submit" class="btn btn-primary">Add. Person</button>                          
                        </div>
                      </div>                        
                    </fieldset>
                  </label>
                  <div class="d-none alert alert-danger clsEOP" role="alert">
                    This is a danger alert—check it out!
                  </div> 
                </div>

                <div class="radio">
                  <label for="content col">
                    <input type="radio" name="radoption" id="OP" value="option1"> Outra pessoa.
                    <fieldset>
                      <div class="form-row">
                        <div class="col-xs-6 col-md-10 col-lg-10">
                          <select class="form-control input-sm" name="id_pessoas" id="OP_pessoa">
                            <option selected="selected" disabled="selected">Escolha a Pessoa</option>
                            <!-- ______________________________________________________________________________ -->
                          </select>
                        </div>
                        <div class="col-xs-6 col-md-2 col-lg-2">
                          <button type="submit" class="btn btn-primary">Add. Person</button>                          
                        </div>
                      </div>                        
                    </fieldset>
                    <input type="text" name="i_OP" class="d-none" value="">
                  </label>
                  <div class="d-none alert alert-danger clsOP" role="alert">
                    This is a danger alert—check it out!
                  </div> 
                </div>

                <div class="radio">
                  <label for="content col">
                    <fieldset>
                      <div class="form-row">
                        <div class="col-xs-6 col-md-10 col-lg-10">
                          <select class="form-control input-sm selectpicker" name="id_pessoas" id="EOPs_pessoa" multiple>
                            <!-- <option selected="selected" disabled="selected">Escolha a(s) Pessoa(s)</option> -->
                            <!-- ______________________________________________________________________________ -->
                          </select>
                        </div>
                        <div class="col-xs-6 col-md-2 col-lg-2">
                          <button type="submit" class="btn btn-primary">Add. Person</button>                          
                        </div>
                      </div>                        
                    </fieldset>
                    <input type="text" name="i_EOPs" class="d-none" value="">
                  </label>
                  <div class="d-none alert alert-danger clsEOPs" role="alert">
                    This is a danger alert—check it out!
                  </div> 
                </div>

                <div class="bd-example">
                  <div class="radio">
                    <label for="content col">
                      <input type="radio" name="radoption" id="OsPs" value="option1">Outras pessoas.
                      <fieldset>
                        <div class="form-row">
                          <div class="col-xs-6 col-md-10 col-lg-10">
                            <select class="form-control input-sm selectpicker" name="id_pessoas" id="OsPs_pessoa" multiple>
                              <!-- <option selected="selected" disabled="selected">Escolha a(s) Pessoa(s)</option> -->
                              <!-- ______________________________________________________________________________ -->
                            </select>
                          </div>
                          <div class="col-xs-6 col-md-2 col-lg-2">
                            <button type="submit" class="btn btn-primary">Add. Person</button>                          
                          </div>
                        </div>                          
                      </fieldset>
                      <input type="text" name="i_OsPs" class="d-none" value="">
                    </label>
                  <div class="d-none alert alert-danger clsOsPs" role="alert">
                    This is a danger alert—check it out!
                  </div> 
                  </div>
                  
                </div>
              </div>

              <div class="agend-card tab-pane fade" id="v-pills-servpack" role="tabpanel" aria-labelledby="v-pills-Cost" style="max-width: none;overflow-y: scroll;height: inherit;">
                <div class="d-none alert alert-warning alert-dismissible fade show servic_pack" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="alert-heading">Well done!</h4>
                  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                  <hr>
                  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>


                <div class="form-group  col-xs-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <label class="content">
                      <input type="radio" name="optionsRadios" id="SIT" value="option1" onfocus="disablecheckbox();"> Selecionar Informacoes do Trabalho 
                                          
                      <fieldset>
                        <div class="form-row">
                          <br>
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Servicos
                              <select class="selectpicker" id="s_servic" tabindex="-98" multiple>
                                <!-- <option selected="selected" disabled>Selecionar Servico</option> -->
                              </select>                             
                            </label>
                            <div class="d-none alert alert-danger clss_servic" role="alert">
                              This is a danger alert—check it out!
                            </div>  
                          </div>

                          <div class="form-group col-md-6">
                            <label for="inputPassword4">Lugares
                              <select class="selectpicker" id="s_lugar" tabindex="-98" multiple>
                                <!-- <option selected="selected" disabled>Selecionar Lugar</option> -->
                              </select>
                            </label>
                            <div class="d-none alert alert-danger clss_lugar" role="alert">
                              This is a danger alert—check it out!
                            </div> 
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputEmail4">Categorias
                              <select class="selectpicker" id="c_category" tabindex="-98" multiple>
                                <!-- <option selected="selected" disabled>Selecionar Categoria</option> -->
                              </select>
                            </label>
                            <div class="d-none alert alert-danger clsc_category" role="alert">
                              This is a danger alert—check it out!
                            </div> 
                          </div>
                        </div>
                      </fieldset>
                    </label>
                    
                  </div>
                </div>
                <div class="form-group  col-xs-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <label class="content">
                      <input type="radio" name="optionsRadios" id="SP" value="option1" onfocus="disablecheckbox();"> Seleccionar Pacote
                      <select class="input-lg" name="pack_id" id="pack_id">
                        <option selected="selected" disabled>Selecionar Pacotes</option>
                      </select>  
                    </label>
                    <div class="d-none alert alert-danger clspack_id" role="alert">
                      This is a danger alert—check it out!
                    </div> 
                  </div>                    
                </div> 
              </div>

              
              <div class="agend-card tab-pane fade bd-example" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-personal" style="background-color: #fff2cc; ">

                <div class="d-none alert alert-secondary alert-dismissible fade show" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="alert-heading">Well done!</h4>
                  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                  <hr>
                  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>



                <div class="form-group  col-xs-12 col-md-12 col-lg-12 xxx">
                  <h4>Selecione os lugares e seus detalhes</h4>
                </div>
                  <div class="form-group  col-xs-12 col-md-12 col-lg-12 places">
                    <div class="btn-group">
                      <div class="btn-group-vertical">
                        <div class="btn-group form-row" role="group" aria-label="Button group with nested dropdown">

                          <div class="col">
                            <select class="" id="cat_escl" tabindex="-98">
                            </select>
                          </div>

                          <div class="col">
                            <select class="" id="lg_escl" tabindex="-98">
                            </select>
                          </div>


                        </div>
                        <div class="input-group">

                          <input type="text" placeholder="Quant." class="form-control" id="quanty">
                          <div class="input-group-btn">
                          <div class="">
                            <select class="" id="srvc_escl" tabindex="-98">
                            </select>
                          </div>

                          </div>
                        </div>
                      </div>                     
                      <div class="form-group">
                        <button type="button" class="addplace btn btn-danger">x</button>
                      </div>
                    </div>
                    <div class="d-none alert alert-danger" role="alert">
                      This is a danger alert—check it out!
                    </div>                      
                  </div>
              </div>


              <div class="agend-card tab-pane fade" id="v-pills-conclusion" role="tabpanel" aria-labelledby="v-pills-conclusion-tab" style="max-width: none;overflow-y: scroll;height: inherit;">



                <div class="d-none alert alert-warning alert-dismissible fade show endagend" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="alert-heading">Well done!</h4>
                  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                  <hr>
                  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>




                <div class="form-group">
                        <!-- ______________________________________________________________________________ -->
                </div>

                <div class="form-group">

                  <blockquote>
                    <label for="content">Alerta</label>
                    <p>Estimado cliente todas informacoes serao guardadas, sem permicao de modifica-la, tem certeza que deseja concluir com a solicitacao da agenda?</p>
                    <footer>+244 924 983 488 - <cite title="Source Title">Cand Studio</cite></footer>
                  </blockquote>
                </div>              
              </div>
          </div>
        </form>
        <div class="agend-footer">
          <div class="agend-buttons-container">
            <button class="btn agend-cancel agend-close" type="button">Cancel</button>
            <div class="btn-group-single pull-right">                        
              <button type="button" class="btn agend-back" style="display: none;">Anterior</button>
              <button type="button" class="btn agend-next btn-primary">Seguinte</button>
            </div>          
          </div>        
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ ('Assets_cs/jquery/jquery-3.3.1.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ ('Assets_cs/Bootstrap/4.1.3/js/bootstrap.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ ('Assets_cs/modal_cs/costumize/costumize.js') }}"></script>


    <script type="text/javascript">          
      $(document).on('click', '.addplace', function(){
        // $("div.form-group.col-xs-12.col-md-12.col-lg-12.xxx").clone(true).appendTo($(this).parent());

        var tusd = $(this).parent().parent().parent().clone().appendTo($(this).parent().parent().parent().parent());
        // tusd.appendTo(tuss);
      });


      $(document).on('click', '.addmat', function(){
        // $("div.form-group.col-xs-12.col-md-12.col-lg-12.xxx").clone(true).appendTo($(this).parent());

        var mat = $(this).parent().parent().parent().parent().parent().parent().clone().appendTo($(this).parent().parent().parent().parent().parent().parent().parent());
        // mat.appendTo(tuss);
      });      
    </script>
</body>
</html>
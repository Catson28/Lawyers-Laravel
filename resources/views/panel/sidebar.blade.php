@extends('panel.llayout')

@section('content')
    <main class="section_main">
        <div class="container">
            <div class="new_process">
                <div class="top_nprocess"><i class="logo_newprocess"></i><h2 class="title_headerprocess">Agendar Consulta</h2></div>
                <div class="body_nprocess">
                    <div class="links_steps_creation">
                        <ul class="menu_linksprocess">
                            <li class="steps"><a class=" active show" id="step_types" href="#types"><i class="fa-solid fa-arrow-down"></i> Tipo de Processo</a></li>
                            <li class="steps"><a class=" disabled" id="step_lawyer" href="#lawyer"><i class="fa-solid fa-arrow-down"></i> Advogado</a></li>
                            <li class="steps"><a class=" disabled" id="step_costumer" href="#costumer"><i class="fa-solid fa-arrow-down"></i> Cliente</a></li>
                            <li class="steps show_m_left"><a class=" disabled" id="step_confirm" href="#confirm"><i class="fa-solid fa-arrow-down"></i> Confirmar</a></li>
                        </ul>
                    </div>

                    <div class="consult_process">
                        <div class="steps_content">
                            <div class="steps_elements">
                                <div id="types" class="content_step types content_step-active">
                                    <h2 class="title_step">Tipo de Processo</h2>
                                    <div class="selecttypes">
                                        <label for="">Selecionar o Tipo</label>
                                        <select name="" onchange="myType(this)" id="stype">
                                            <option value="">Selecione o tipo</option>
                                            @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>                                
                                    </div>
                                    <div id="alerType" class="alert-danger hid"></div>
                                    <form onsubmit="return false;" class="newtype" name="newtype">
                                        @csrf
                                        <label onclick="showHideType()" class="toggle_title">
                                            <h2>Adicionar Tipo</h2>  
                                            <button class="btn btn-outline">Novo 
                                                <i class="fa-solid fa-circle-caret-down"></i>
                                            </button>
                                        </label>
                                        <div class="newtype_content hid">
                                            <div class="field_tipes">

                                            <h4 class="title_step">Tipo de Processo</h4>
                                                <div class="row">
                                                    <div class="padd_r_l-10 col_7">
                                                        <input id="teste" name="name" class="inform mrg_b-5" type="text" placeholder="Nome">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                    <div class="padd_r_l-10 col_5">
                                                        <input name="description" class="inform mrg_b-5" type="text" placeholder="Tipo">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="save_new">
                                                <button type="submit" onclick="onsubmitType()" class="btn">Salvar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="lawyer" class="content_step lawyer">
                                    <h2 class="title_step">Advogado</h2>
                                    <div class="selectlawyer">
                                        <label for="">Selecionar Advogado</label>
                                        <select name=""  onchange="myLawyer(this)" id="slawyer">
                                            <option value="">Selecione o Advogado</option>
                                            @foreach($employees as $employee)
                                                <option value="{{ $employee->id }}">{{ $employee->person->full_name }}</option>
                                            @endforeach 
                                        </select>                                
                                    </div>
                                    <div id="alerLawyer" class="alert-danger hid"></div>

                                    <form onsubmit="return false;" class="newlawyer" name="newlawyer">
                                        @csrf
                                        <label onclick="showHideLawyer()" class="toggle_title">
                                        <h2>Adicionar Advogado</h2>  
                                            <button class="btn btn-outline">Novo 
                                                <i class="fa-solid fa-circle-caret-down"></i>
                                            </button>
                                        </label>
                                        
                                        <div class="newlawyer_content hid">
                                            <div class="field_tipes">

                                            <h4 class="title_step">Novo Advogado</h4>
                                                <div class="row">
                                                    <div class="col_6 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="name" placeholder="Nome">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="bi" placeholder="BI">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="addresss" placeholder="Morada">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col_1 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="telefone" placeholder="Telefone">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="funcao" placeholder="Funcao">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div> 
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="nif" placeholder="NIF">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="cedula" placeholder="N Cedula">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                    <div class="col_2 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="genero" placeholder="Genero">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" onfocus="(this.type='date')" name="datanasc" placeholder="Data de Nascimento">
                                                        <div id="alerCustomer" class="alert-danger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="save_new">
                                                <button type="submit" onclick="onsubmitLawyer()" class="btn">Salvar</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div id="costumer" class="content_step costumer">
                                    <h2 class="title_step">Cliente</h2>
                                    <div class="selectcostumer">
                                        <label for="">Selecionar Cliente</label>
                                        <select name=""  onchange="myCostumer(this)" id="scustomer">
                                            <option value="">Selecione o Cliente</option>
                                                @foreach($owners as $owner)
                                                    <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                                                @endforeach
                                        </select>                                
                                    </div>
                                    <div id="alerCustomer" class="alert-danger hid"></div>
                                    <label onclick="showHideCostumer()" class="toggle_title"><h2>Adicionar Cliente</h2>  
                                <button class="btn btn-outline">Novo 
                                                <i class="fa-solid fa-circle-caret-down"></i>
                                            </button>
                                        </label>

                                    <div class="newcostumer_content hid">

                                        <form onsubmit="return false;" class="newparticip" name="newparticip">
                                            @csrf
                                                <div class="field_tipes">

                                                <h4 class="title_step">Participacao</h4>
                                                    <div class="row">
                                                        <div class="col_5 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="name" placeholder="Nome da Participacao. Ex: Reu; Arguido...">
                                                            <div id="alerCustomer" class="alert-danger"></div>
                                                        </div>
                                                        <div class="col_7 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="description" placeholder="Descricao da Participacao">
                                                            <div id="alerCustomer" class="alert-danger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="save_new">
                                                    <button type="submit" onclick="onsubmitParticip()" class="btn">Salvar</button>
                                                </div>                                        
                                        </form>
                                        
                                        <br>
                                        <hr>

                                        <form onsubmit="return false;" class="newintegrant" name="newintegrant">
                                            @csrf
                                                <div class="field_tipes">

                                                    <h4 class="title_step">Participante</h4>

                                                    <div class="row">
                                                        <div class="col_6 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="name" placeholder="Nome do Integrante do Caso">
                                                            <div id="alerCustomer" class="alert-danger"></div>
                                                        </div>
                                                        <div class="col_3 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="bi" placeholder="BI">
                                                            <div id="alerCustomer" class="alert-danger"></div>
                                                        </div>
                                                        <div class="col_3 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="address" placeholder="Morada">
                                                            <div id="alerCustomer" class="alert-danger"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col_5 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="telefone" placeholder="Telefone">
                                                            <div id="alerCustomer" class="alert-danger"></div>
                                                        </div>
                                                        <div class="col_3 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" onfocus="(this.type='date')" name="datanasc" placeholder="Data de nasc">
                                                            <div id="alerCustomer" class="alert-danger"></div>
                                                        </div>
                                                        <div class="col_4 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="genero" placeholder="Genero">
                                                            <div id="alerCustomer" class="alert-danger"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col_4 padd_r_l-10">
                                                            <select name="participntion" id="sparticipntion" class="mrg_b-5 inform">
                                                                <option value="">Selecione a Participacao</option>
                                                                @foreach($participants as $participant)
                                                                    <option value="{{ $participant->id }}">{{ $participant->name }}</option>
                                                                @endforeach
                                                            </select>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="save_new">
                                                    <button type="submit" onclick="onsubmitIntegrant()" class="btn">Salvar</button>
                                                </div>                                        
                                        </form>
                                        
                                        <br>
                                        <hr>

                                        <form onsubmit="return false;" class="newcostumer" name="newcostumer">
                                            @csrf
                                                <div class="field_tipes">

                                                <h4 class="title_step">Cliente</h4>
                                                    <div class="row">
                                                        <div class="col_4 padd_r_l-10">
                                                            <select name="integrnt" id="" class="mrg_b-5 inform">
                                                                <option value="">Selecione O Integrante Principal</option>
                                                                @foreach($persPartcps as $persPartcp)
                                                                    <option value="{{ $persPartcp->id }}">{{ $persPartcp->person->full_name }}</option>
                                                                @endforeach
                                                            </select>   
                                                        </div>
                                                        <div class="col_3 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="name_case_costumer" placeholder="Nome do Cliente do Caso">
                                                        </div>
                                                        <div class="col_5 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="description" placeholder="Descricao do Cliente">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="save_new">
                                                    <button type="submit" onclick="onsubmitCustomer()" class="btn">Salvar</button>
                                                </div>                                        
                                        </form>
                                    </div>
                                </div>
                                <div id="confirm" class="content_step confirm">
                                    <h2 class="title_step">Confirmar</h2>

                                    <form action="{{ url('/addConsult') }}" method="post" enctype="multipart/form-data" name="newconfirm">
                                        @csrf
                                            <div class="field_tipes">

                                            <h4 class="title_step">Agenda</h4>
                                                <div class="row">
                                                    <div class="col_12 padd_r_l-10">
                                                        <label for="typid" id="typLbl">Tipo Nao Selecionado</label>
                                                        <input id="typid" class="mrg_b-5 inform hid" type="text" name="typid">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col_12 padd_r_l-10">
                                                        <label for="emploid" id="emploLbl">Advogado Nao Selecionado</label>
                                                        <input id="emploid" class="mrg_b-5 inform hid" type="text" name="emploid">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col_12 padd_r_l-10">
                                                        <label for="ownerid" id="ownerLbl">Cliente Nao Selecionado</label>
                                                        <input id="ownerid" class="mrg_b-5 inform hid" type="text" name="ownerid">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col_12 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" onfocus="(this.type='date')" name="schedul" placeholder="Insira a Data da consulta">
                                                    </div>
                                                </div>
                                            </div>                                     
                                    </form>
                                    <div id="alerConfirm" class="alert-danger"></div>
                                </div>
                            </div>


                            <div class="btn_step">
                                <button type="button" class="btn btn-outline btn_prev isType">
                                    <i class="fa-solid fa-circle-arrow-left"></i>
                                    Anterior
                                </button>

                                <button type="button" id="constult_next" class="btn btn-outline btn_next">
                                    Proximo
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
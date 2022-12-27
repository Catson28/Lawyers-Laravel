<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{{ csrf_token() }}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
    <link href="{{ asset('css/style_panel.css') }}" rel="stylesheet">
</head>
<body>
    <aside class="aside_section">
        <div class="section_logo">
            <a href="{{url('/')}}"><img src="{{ ('img/logo_main.png') }}"  alt="" class="img_logo"></a>
        </div>
        <div class="info_user">
            <img src="" alt="" class="img_perfil">
            <h3 class="user_name"> Gabriel</h3>
        </div>
        <div class="aside_menu">
            <ul class="sistem_modules">
                <li class="part_module aba show_menu">
                    <a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Pessoal</a>
                    <div class="list_sub_moduls">
                        <ul class="list_submoduls">
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo 1</a></li>
                        </ul>
                    </div>
                </li>
                <li class="part_module aba">
                    <a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Processo</a>
                    <div class="list_sub_moduls">
                        <ul class="list_submoduls">
                            <li class="submoduls teste"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Empresa</a></li>
                            <li class="submoduls aba">

                                <a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Conflito</a>
                                <div class="list_sub_categry">
                                    <ul class="list_subcategry">
                                        <li class="subcategry teste"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Consulta</a></li>
                                        <li class="subcategry"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Abrir processo</a></li>
                                        <li class="subcategry"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Listar</a></li>
                                    </ul>
                                </div>


                            </li>
                        </ul>
                    </div>
                </li>
                <li class="part_module aba">
                    <a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Arquivo</a>
                    <div class="list_sub_moduls">
                        <ul class="list_submoduls">
                            <li class="submoduls teste"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                        </ul>
                    </div>
                </li>
                <li class="part_module aba">
                    <a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Configuracoes</a>
                    <div class="list_sub_moduls">
                        <ul class="list_submoduls">
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <header class="section_header">
        <div class="container itens_header">
            <div class="toggle_buttom">
                <button class="btn">oi</button>
            </div>
            <div class="lateral_header_section dsplay_flx">
                <div class="search_nlett spac_between dsplay_flx">
                    <input type="text" class="search_header">
                    <div class="inpt">
                        <button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>

                <div class="header_messages">
                    <ul class="notif_message dsplay_flx">
                        <li><i class="fa-solid fa-envelope icn_ntf"></i></li>
                        <li><i class="fa-solid fa-bell icn_ntf"></i></li>
                        <li><i class="fa-solid fa-user icn_ntf"></i></li>
                    </ul>
                </div>            
            </div>            
        </div>


    </header>
    @yield('content')
    <main id="main">
        <div class="container">
            <div class="new_process">
                <div class="top_nprocess"><i class="logo_newprocess"></i><h2 class="title_headerprocess">Agendar Consulta de Processo</h2></div>
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
                                                <i class="fa-solid fa-arrow-down"></i>
                                            </button>
                                        </label>
                                        <div class="newtype_content hid">
                                            <div class="field_tipes">

                                            <h4 class="title_step">Tipo de Processo</h4>
                                                <div class="row">
                                                    <div class="padd_r_l-10 col_7">
                                                        <input id="teste" name="name" class="inform mrg_b-5" type="text" placeholder="Nome">
                                                    </div>
                                                    <div class="padd_r_l-10 col_5">
                                                        <input name="description" class="inform mrg_b-5" type="text" placeholder="Tipo">
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
                                                <i class="fa-solid fa-arrow-down"></i>
                                            </button>
                                        </label>
                                        
                                        <div class="newlawyer_content hid">
                                            <div class="field_tipes">

                                            <h4 class="title_step">Novo Advogado</h4>
                                                <div class="row">
                                                    <div class="col_6 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="name" placeholder="Nome">
                                                    </div>
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="bi" placeholder="BI">
                                                    </div>
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="addresss" placeholder="Morada">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col_1 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="telefone" placeholder="Telefone">
                                                    </div>
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="funcao" placeholder="Funcao">
                                                    </div> 
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="nif" placeholder="NIF">
                                                    </div>
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="cedula" placeholder="N Cedula">
                                                    </div>
                                                    <div class="col_2 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" name="genero" placeholder="Genero">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col_3 padd_r_l-10">
                                                        <input class="mrg_b-5 inform" type="text" onfocus="(this.type='date')" name="datanasc" placeholder="Data de Nascimento">
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
                                                <i class="fa-solid fa-arrow-down"></i>
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
                                                        </div>
                                                        <div class="col_7 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="description" placeholder="Descricao da Participacao">
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
                                                        </div>
                                                        <div class="col_3 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="bi" placeholder="BI">
                                                        </div>
                                                        <div class="col_3 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="address" placeholder="Morada">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col_5 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="telefone" placeholder="Telefone">
                                                        </div>
                                                        <div class="col_3 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" onfocus="(this.type='date')" name="datanasc" placeholder="Data de nasc">
                                                        </div>
                                                        <div class="col_4 padd_r_l-10">
                                                            <input class="mrg_b-5 inform" type="text" name="genero" placeholder="Genero">
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

    <footer class="footer_section">
        <div class="foot_employes_contact container">
            <div class="colun_3 col_3_foot">
                <img src="{{ ('img/logo_main.png') }}" alt="" class="footer_logo">
                <h3 class="enploye_footer">Empresa de advogados de Benguela.</h3>
                <p>estou tentando escrever um texto longo para deixar o template mais real mas nao esta sendo facil porque pensar ee dificil.</p>
            </div>
        </div>
        <div class="endfooter">
            <div class="container">
                <h2 class="author">Gabrier Rafael Chiteta / 2022</h2>
            </div>
        </div>

    </footer>
    <script src="https://kit.fontawesome.com/65c9931819.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}" crossorigin="anonymous"></script>

    <script>

var abas = document.getElementsByClassName("aba");
// document.getElementById("aba")
for(let x=0; x<abas.length; x++){
    abas[x].addEventListener("mouseenter", overMenu);
}

for(let x=0; x<abas.length; x++){
    abas[x].addEventListener("mouseleave", normalMenu);
}


document.getElementById("demo").addEventListener("mouseover", mouseOver);
document.getElementById("demo").addEventListener("mouseout", mouseOut);

var dimos = document.getElementsByClassName("dimo");

for(let x=0; x<dimos.length; x++){
    // alert(dimos[x].innerHTML);
    dimos[x].addEventListener("mouseover", mousiOver);
}



function mousiOver(obj) {
    // alert(obj);
    obj.target.style.color = "blue";
}

function mouseOver() {
  document.getElementById("demo").style.color = "red";
}

function mouseOut() {
  document.getElementById("demo").style.color = "black";
}




        function overMenu(x) {
            // alert("Assss");
            // x.getElementsChild.style.display = "none";// bom para todos filhos
            // x.firstElementsChild.style.display = "none";// bom para o primeiro filhos
            // x.target.lastElementChild.style.display = "block";// bom para o ultimo filhos
            // x.firstChild.nodeName.style.display = "none";
            x.target.lastElementChild.style.display = "block";// bom para o ultimo filhos
            x.target.lastElementChild.style.color = "black";// bom para o ultimo filhos
        }

        function normalMenu(x) {
            if(x.target.lastElementChild){
                x.target.lastElementChild.style.display = "none";// bom para o ultimo filhos
                // x.getElementsChild.style.display = "block";// bom para todos filhos
            }
        }

        // ___________________________  Get ajax ___________________________

        function exampleGet(){
            let xhr = new XMLHttpRequest();
            xhr.open('GET', "{{ route('ajaxpuro') }}");
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhr.onprogress = function(){
                console.log("carregando...");
            }
            xhr.onload = function(){
                var obj = JSON.parse(xhr.responseText);
                console.log(obj);
                alert(obj.message);
            }
            xhr.send();  
        }

        // ___________________________  Get ajax ___________________________


        // ___________________________  Post ajax ___________________________

            function onsubmitType(){
                // Post

                let formData = new FormData(document.forms.newtype);

                console.log(formData);

                // create AJAX instance
                var ajax = new XMLHttpRequest();

                // open the request
                ajax.open("POST", "{{ route('addAjaxType') }}", true);


                // listen for response from server
                ajax.onload = function () {
                    // when the request is successfull
                    if (this.readyState == 4 && this.status == 200) {
                        // convert the JSON response into Javascript object
                        var data = JSON.parse(this.responseText);

                        // show the response
                        alert(data.status + " - " + data.message);
                        var typoption = document.createElement("option");
                        typoption.text = data.type.name;
                        typoption.value = data.type.id;
                        var type = document.getElementById("stype");
                        type.append(typoption);
                        // console.log(data);
                    }

                    // if the request fails
                    if (this.status == 500) {
                        alert(this.responseText);
                    }
                };
                // send the request
                ajax.send(formData);

            }


            function onsubmitLawyer(){
                // Post

                let formData = new FormData(document.forms.newlawyer);

                console.log(formData);

                // create AJAX instance
                var ajax = new XMLHttpRequest();

                // open the request
                ajax.open("POST", "{{ route('addAjaxLawyer') }}", true);


                // listen for response from server
                ajax.onload = function () {
                    // when the request is successfull
                    if (this.readyState == 4 && this.status == 200) {
                        // convert the JSON response into Javascript object
                        var data = JSON.parse(this.responseText);

                        // show the response
                        alert(data.status + " - " + data.message);
                        // console.log(data);
                        var lawyeroption = document.createElement("option");
                        lawyeroption.text = data.employee.person.full_name;
                        lawyeroption.value = data.employee.id;
                        var employee = document.getElementById("slawyer");
                        employee.append(lawyeroption);
                    }

                    // if the request fails
                    if (this.status == 500) {
                        alert(this.responseText);
                    }
                };
                // send the request
                ajax.send(formData);

            }

            function onsubmitCustomer(){
                // Post

                let formData = new FormData(document.forms.newcostumer);

                console.log(formData);

                // create AJAX instance
                var ajax = new XMLHttpRequest();

                // open the request
                ajax.open("POST", "{{ route('addAjaxCostumer') }}", true);


                // listen for response from server
                ajax.onload = function () {
                    // when the request is successfull
                    if (this.readyState == 4 && this.status == 200) {
                        // convert the JSON response into Javascript object
                        var data = JSON.parse(this.responseText);

                        // show the response
                        alert(data.status + " - " + data.message);
                        var customeroption = document.createElement("option");
                        customeroption.text = data.employee.person.full_name;
                        customeroption.value = data.employee.id;
                        var employee = document.getElementById("scustomer");
                        employee.append(customeroption);
                    }

                    // if the request fails
                    if (this.status == 500) {
                        alert(this.responseText);
                    }
                };
                // send the request
                ajax.send(formData);

            }

            function onsubmitIntegrant(){
                // Post

                let formData = new FormData(document.forms.newintegrant);

                console.log(formData);

                // create AJAX instance
                var ajax = new XMLHttpRequest();

                // open the request
                ajax.open("POST", "{{ route('addAjaxIntegrant') }}", true);


                // listen for response from server
                ajax.onload = function () {
                    // when the request is successfull
                    if (this.readyState == 4 && this.status == 200) {
                        // convert the JSON response into Javascript object
                        var data = JSON.parse(this.responseText);

                        // show the response
                        console.log(data);
                        alert(data.status + " - " + data.message);
                    }

                    // if the request fails
                    if (this.status == 500) {
                        alert(this.responseText);
                    }
                };
                // send the request
                ajax.send(formData);

            }

            function onsubmitParticip(){
                // Post

                let formData = new FormData(document.forms.newparticip);

                console.log(formData);

                // create AJAX instance
                var ajax = new XMLHttpRequest();

                // open the request
                ajax.open("POST", "{{ route('addAjaxParticip') }}", true);


                // listen for response from server
                ajax.onload = function () {
                    // when the request is successfull
                    if (this.readyState == 4 && this.status == 200) {
                        // convert the JSON response into Javascript object
                        var data = JSON.parse(this.responseText);

                        // show the response
                        alert(data.status + " - " + data.message);
                        var participntionoption = document.createElement("option");
                        participntionoption.text = data.person.name;
                        participntionoption.value = data.person.id;
                        var employee = document.getElementById("sparticipntion");
                        employee.append(participntionoption);
                        console.log(data);
                    }

                    // if the request fails
                    if (this.status == 500) {
                        alert(this.responseText);
                    }
                };
                // send the request
                ajax.send(formData);

            }

        // ___________________________  Post ajax ___________________________
        
    </script>
</body>
</html>


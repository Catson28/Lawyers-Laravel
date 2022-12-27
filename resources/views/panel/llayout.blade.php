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
            <h3 class="user_name"> {{ Auth::user()->name }}</h3>
        </div>
        <div class="aside_menu">
            <ul class="sistem_modules">
                <li class="part_module aba">
                    <a class="link_menu" href=""><i class="fa-solid fa-gauge"></i> Dashboard</a>
                    <div class="list_sub_moduls">
                        <ul class="list_submoduls">
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-right"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-right"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-right"></i> Submodulo 1</a></li>
                        </ul>
                    </div>
                </li>
                <li class="part_module aba">
                    <a class="link_menu" href=""><i class="fa-light fa-folder-magnifying-glass"></i> Processo</a>
                    <div class="list_sub_moduls">
                        <ul class="list_submoduls">
                            <li class="submoduls teste"><a class="link_menu" href=""><i class="fa-solid fa-arrow-right"></i> Empresa</a></li>
                            <li class="submoduls aba show_menu">

                                <a class="link_menu" href=""><i class="fa-solid fa-arrow-right"></i> Conflito</a>
                                <div class="list_sub_categry">
                                    <ul class="list_subcategry">
                                        <li class="subcategry teste"><a class="link_menu" href="{{url('/schedule')}}"><i class="fa-solid fa-arrow-down"></i> Agendar Consulta</a></li>
                                        <li class="subcategry teste"><a class="link_menu" href="{{url('/listConsult')}}"><i class="fa-solid fa-arrow-down"></i> Listar Consulta</a></li>
                                        <li class="subcategry"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Abrir Processo</a></li>
                                        <li class="subcategry teste"><a class="link_menu" href="{{url('/listProcess')}}"><i class="fa-solid fa-arrow-down"></i> Listar Processos</a></li>
                                        <li class="subcategry teste"><a class="link_menu" href="{{url('/schedule')}}"><i class="fa-solid fa-arrow-down"></i> Listar Consulta</a></li>
                                    </ul>
                                </div>


                            </li>
                        </ul>
                    </div>
                </li>
                <li class="part_module aba">
                    <a class="link_menu" href=""><i class="fa-solid fa-circle-arrow-down"></i> Arquivo</a>
                    <div class="list_sub_moduls">
                        <ul class="list_submoduls">
                            <li class="submoduls teste"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                            <li class="submoduls"><a class="link_menu" href=""><i class="fa-solid fa-arrow-down"></i> Submodulo</a></li>
                        </ul>
                    </div>
                </li>
                <li class="part_module aba">
                    <a class="link_menu" href=""><i class="fa-solid fa-circle-arrow-down"></i> Pessoas</a>
                    <div class="list_sub_moduls">
                        <ul class="list_submoduls">
                            <li class="submoduls"><a class="link_menu" href="{{url('/addEmployee')}}"><i class="fa-solid fa-arrow-down"></i> Add_Funcionario</a></li>
                            <li class="submoduls"><a class="link_menu" href="{{url('/listEmployes')}}"><i class="fa-solid fa-arrow-down"></i> Funcionarios</a></li>
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


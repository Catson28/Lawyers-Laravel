<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="{{ asset('cawn/css/style_panel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>Responsive Side Menu</title>
    <style>
      .close-modal {
        background: none;
        border: none;
        font-size: 1.5rem;
      }

      .modal {
        width: 450px;
        position: fixed;
        top: -50%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: top 0.3s ease-in-out;
        border: 1px solid #ccc;
        border-radius: 10px;
        z-index: 2;
        background-color: #fff;
      }

      .modal.active {
        top: 15%;
      }

      .modal .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #ccc;
        padding: 0.5rem;
        background-color: rgba(0, 0, 0, 0.05);
      }

      .modal .body {
        padding: 0.75rem;
      }

      #overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.3);
      }

      #overlay.active {
        display: block;
      }
    </style>
  </head>
  <body>
    <header id="header">
      <i class="fas fa-bars" id="nav-toggler"></i>
      <div>
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
                        <li>
                        <i class="fa-solid fa-user icn_ntf"></i>
                            <span>{{ Auth::user()->name }}</span>
                        </li>
                    </ul>
                </div>            
            </div> 

      </div>
    </header>

    <nav id="nav">
      <div>
        <div class="logo">
          <i></i>
          <span><a href="{{url('/')}}"><img src="{{ ('img/logo_main.png') }}"  alt="" class="img_logo"></a></span>
        </div>
        <ul class="nav">
          <li class="nav__item">
            <a href="#" class="nav__item-link">
              <i class="fas fa-home"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__item-link active">
              <!-- <i class="fa-solid fa-book-section">//////</i> -->
              <!-- <i class="fa-solid fa-gavel"></i> -->
              <i class="fa-solid fa-layer-group"></i>
              <span>Processo</span>
            </a>
            <ul class="d-none">
              <li>
                <a href="#" class="item__nav-link sub_link active-sub-link">
                  <i class="fa-solid fa-scale-balanced"></i>
                  <span>Outros</span> 
                </a>
                  <ul class="d-none">
                    <li>
                      <a href="{{url('/schedule')}}" class="sub_link active-sub-link">
                        <i class="fa-solid fa-gavel"></i>
                        <span>Agendar consulta</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/listConsult')}}" class="sub_link">
                        <i class="fa-solid fa-gavel"></i>
                        <span>Listar consulta</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/listProcess')}}" class="sub_link">
                        <i class="fa-solid fa-gavel"></i>
                        <span>Abrir Processo</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{url('/schedule')}}" class="sub_link">
                        <i class="fa-solid fa-gavel"></i>
                        <span>Listar Processo</span> 
                      </a>
                    </li>
                    <li>
                      <a href="#" class="sub_link">Listar consulta</a>
                    </li>
                  </ul>
              </li>
              <li>
                <a href="#" class="sub_link">
                  <i class="fa-solid fa-briefcase"></i>
                  <span>Empresa</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__item-link">
              <i class="fas fa-user-alt"></i>
              <span>Perfil</span>
            </a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__item-link">
              <i class="fas fa-cogs"></i>
              <span>Configuracao</span>
            </a>
          </li>
        </ul>
      </div>

      <a class="sign-out" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
        <span>{{ __('Sair') }}</span>
      </a>
    </nav>
    @yield('content')
 
    <footer id="footer">
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
      // ======================== inicio do modal ========================
      const btns = document.querySelectorAll("[data-target]");
      const close_modals = document.querySelectorAll(".close-modal");
      const overlay = document.getElementById("overlay");



        btns.forEach((btn) => {
          btn.addEventListener("click", () => {
            overlay.classList.add("active");
          });
        });


        close_modals.forEach((btn) => {
          btn.addEventListener("click", () => {
            const modal = btn.closest(".modal");
            modal.classList.remove("active");
            overlay.classList.remove("active");
          });
        });

        window.onclick = (event) => {
          if (event.target == overlay) {
            const modals = document.querySelectorAll(".modal");
            modals.forEach((modal) => modal.classList.remove("active"));
            overlay.classList.remove("active");
          }
        };

      // ======================== fim do modal ========================




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


                        if ((data.errors)) {
                          // document.querySelector('.error').removeClass('hide');
                          // document.querySelector('.error').text(data.message.errors);
                        } else {
                          const overlay = document.getElementById("overlay");
                          overlay.classList.add("active");
                          document.querySelector("#modal2").classList.add("active");
                          // console.log(data.numero);

                          // top.location='/posts/add_post';
                        }
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
                        // console.log(data);

                        if ((data.errors)) {
                          document.querySelector('.error').removeClass('hide');
                          document.querySelector('.error').text(data.message.errors);
                        } else {
                          // console.log(data.numero);

                          const overlay = document.getElementById("overlay");
                          overlay.classList.add("active");
                          document.querySelector("#modal2").classList.add("active");
                          // top.location='/posts/add_post';
                        }
                        // alert(data.status + " - " + data.message);
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
    <script src="main.js" defer></script>
  </body>
</html>


        var alterandoTipo = true;
        var alterandoAdvogado = true;
        var alterandoClient = true;
        var alterandoConfirm = true;
        let newtype_content = document.querySelector(".newtype_content");
        let newlawyer_content = document.querySelector(".newlawyer_content");
        let newcostumer_content = document.querySelector(".newcostumer_content");
        

        const prevBtns = document.querySelectorAll(".btn_prev");
        const nextBtns = document.querySelectorAll(".btn_next");
        const endBtns = document.querySelectorAll(".btn_end");

        const progress = document.getElementById("progress");
        const contentSteps = document.querySelectorAll(".content_step");
        const progressSteps = document.querySelectorAll(".progress-step");

        let contentStepsNum = 0;


        var stype = '';
        var Txtype = '';
        var slawyer = '';
        var Txlawyer = '';
        var vemploid = '';
        var scustomer = '';
        var Txcustomer = '';
        var errorStep = 1;


        
        

        function myType(sel){
            stype = sel.options[sel.selectedIndex].value;
            Txtype = sel.options[sel.selectedIndex].text;
            // alert(Txtype);
            document.getElementById("typid").value = stype;
            document.getElementById("typLbl").innerHTML = Txtype;
        }

        function myLawyer(sel){
            slawyer = sel.options[sel.selectedIndex].value;
            Txlawyer = sel.options[sel.selectedIndex].text;
            // alert(Txlawyer);
            document.getElementById("emploid").value = slawyer;
            document.getElementById("emploLbl").innerHTML = Txlawyer;
        }

        function myCostumer(sel){
            scustomer = sel.options[sel.selectedIndex].value;
            Txcustomer = sel.options[sel.selectedIndex].text;
            // alert(Txcustomer);
            document.getElementById("ownerid").value = scustomer;
            document.getElementById("ownerLbl").innerHTML = Txcustomer;
        }




        nextBtns.forEach((btn) => {
            btn.addEventListener("click", listenerRight);
            // btn.removeEventListener("click", nextOrder);
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", prevOrder);
            // btn.removeEventListener("click", nextOrder);
        });

        function nextOrder(){
            // alert("Olla..." +contentStepsNum);
            nextDetail();
            if(errorStep==1){
                contentStepsNum++;
                updateContentSteps();
                updateProgressbar();
            }

        }

        function prevOrder(){
            contentStepsNum--;
            prevDetail();
            updateContentSteps();
            updateProgressbar();
        }

        function endOrder(){    
            /*
                var FendButon = document.querySelector('.btn_end');
                var playButton = document.querySelector('.isCostumer');
                playButton.className = "isSubmit btn btn-outline btn_prev";
                FendButon.innerHTML = "A Carregar ... <i class='fa-solid fa-pen-to-square'></i>";
                FendButon.className = "btn btn-outline btn_end";
                prevOrder();
            */ 
                alterandoConfirm = false;
                var playButton = document.querySelector('.btn_end');
                playButton.className = "btn btn-outline btn-outline-success btn_end";
                playButton.innerHTML = "A Carregar <i class='fa-solid fa-arrow-rotate-right'></i>";

           let cformData = new FormData(document.forms.newconfirm.submit());
           alert("A Marcacao da consulta esta a ser efectuada...");


        }

        let doRight = nextOrder;

        function listenerRight() {
            doRight(); //external function call
        }

        function updateContentSteps() {
            
            if (document.querySelector(".content_step").classList.contains("types", "content_step-active")) {
                // alert("Funcionando");
                // code...
                

            }
            

            contentSteps.forEach((formStep) => {
                formStep.classList.contains("content_step-active") &&
                formStep.classList.remove("content_step-active");
            });

            contentSteps[contentStepsNum].classList.add("content_step-active");
        }

        function updateProgressbar() {
            progressSteps.forEach((progressStep, idx) => {
                if (idx < contentStepsNum + 1) {
                progressStep.classList.add("progress-step-active");
                } else {
                progressStep.classList.remove("progress-step-active");
                }
            });

            const progressActive = document.querySelectorAll(".progress-step-active");

            progress.style.width =
                ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
        }
        
        function nextDetail() {
            if(alterandoTipo && alterandoAdvogado && alterandoClient && alterandoConfirm){
                // alert(alterandoTipo+"_"+alterandoAdvogado+"_"+"_"+alterandoClient+"_"+alterandoConfirm);
                
                if(stype == ''){

                    var alerType = document.getElementById("alerType");
                    alerType.innerHTML = "Por Favor Escolha um tipo de Processo";
                    alerType.className = "alert-danger"; 


                    errorStep = 0;
                } else {

                    var alerType = document.getElementById("alerType");
                    alerType.innerHTML = "";
                    alerType.className = "alert-danger hid"; 


                    errorStep = 1;
                    alterandoTipo = false;
                    var playButton = document.querySelector('.isType');
                    playButton.className = "isLawyer btn btn-outline btn_prev";
                }
                

            } else if(!alterandoTipo && alterandoAdvogado && alterandoClient && alterandoConfirm){
                // alert(alterandoTipo+"_"+alterandoAdvogado+"_"+"_"+alterandoClient+"_"+alterandoConfirm);
                
                
                if(slawyer == ''){
                    var alerLawyer = document.getElementById("alerLawyer");
                    alerLawyer.innerHTML = "Por Favor Selecione o Advogado";
                    alerLawyer.className = "alert-danger"; 

                    errorStep = 0;
                } else {
                    var alerLawyer = document.getElementById("alerLawyer");
                    alerLawyer.innerHTML = "";
                    alerLawyer.className = "alert-danger hid"; 

                    errorStep = 1;
                    alterandoAdvogado = false;
                    var playButton = document.querySelector('.isLawyer');
                    playButton.className = "isCostumer btn btn-outline btn_prev";                    
                }

            } else if(!alterandoTipo && !alterandoAdvogado && alterandoClient && alterandoConfirm){
                // alert(alterandoTipo+"_"+alterandoAdvogado+"_"+"_"+alterandoClient+"_"+alterandoConfirm);
                
                
                if(scustomer == ''){


                    var alerCustomer = document.getElementById("alerCustomer");
                    alerCustomer.innerHTML = "Por Favor Selecione o Cliente";
                    alerCustomer.className = "alert-danger"; 


                    errorStep = 0;
                } else {


                    var alerCustomer = document.getElementById("alerCustomer");
                    alerCustomer.innerHTML = "";
                    alerCustomer.className = "alert-danger hid"; 


                    errorStep = 1;
                    alterandoClient = false;
                    var endButon = document.querySelector('.btn_next');
                    var playButton = document.querySelector('.isCostumer');
                    playButton.className = "isConfirm btn btn-outline btn_prev";
                    endButon.innerHTML = "Finalizar <i class='fa-solid fa-pen-to-square'></i>";
                    endButon.className = "btn btn-outline btn-outline-primary btn_end";
                    doRight = endOrder;                    
                }

                // playButton.innerHTML = "Finalizar";
            } else {
                // alert(alterandoTipo+"_"+alterandoAdvogado+"_"+"_"+alterandoClient+"_"+alterandoConfirm);
                
                alterandoConfirm = false;
                var playButton = document.querySelector('.isConfirm');
                playButton.className = "isSubmit btn btn-outline btn_prev";
            }
        }
        
        function prevDetail() {
            if(!alterandoTipo && alterandoAdvogado && alterandoClient && alterandoConfirm){
                // alert(alterandoTipo+"_"+alterandoAdvogado+"_"+"_"+alterandoClient+"_"+alterandoConfirm);

                alterandoTipo = true;
                var playButton = document.querySelector('.isLawyer');
                playButton.className = "isType btn btn-outline btn_prev";
            } else if(!alterandoTipo && !alterandoAdvogado && alterandoClient && alterandoConfirm){
                // alert(alterandoTipo+"_"+alterandoAdvogado+"_"+"_"+alterandoClient+"_"+alterandoConfirm);
                
                alterandoAdvogado = true;
                var playButton = document.querySelector('.isCostumer');
                playButton.className = "isLawyer btn btn-outline btn_prev";
            } else {
                // alert(alterandoTipo+"_"+alterandoAdvogado+"_"+"_"+alterandoClient+"_"+alterandoConfirm);
                
                alterandoClient = true;
                var preEndButon = document.querySelector('.btn_end');
                var playButton = document.querySelector('.isConfirm');
                preEndButon.className = "btn btn-outline btn_next";
                playButton.className = "isCostumer btn btn-outline  btn_prev";
                preEndButon.innerHTML = "Proximo <i class='fa-solid fa-circle-arrow-right'></i>";
                doRight = nextOrder;
            }
        }

        // ___________________________ separacao ____________________________
        
        
        function showHideType(){
            newtype_content.classList.toggle("hid");
        }
        
        function showHideLawyer(){
            newlawyer_content.classList.toggle("hid");
        }
        
        function showHideCostumer(){
            newcostumer_content.classList.toggle("hid");
        }



        

        // ___________________________ Novo tipo ____________________________
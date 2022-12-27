

            var alterandoTipo = true;

            document.querySelector('.btn_next').onclick = function(){
                  if(alterandoTipo){
                        alterandoTipo = false;
                        var playButton = document.querySelector('.notType');
                        playButton.className = "isType";
                  } else {
                        alterandoTipo = true;
                        var playButton = document.querySelector('.isType')
                        playButton.className = "notType";
                  }
            }







  isType - oculto
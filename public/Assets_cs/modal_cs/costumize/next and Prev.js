$(function(){
    var actual_p, next_p, prev_p, aux;
    $('.agend-back').hide();



    // Botoes laterais____________________________________________________________

    $('#v-pills-home-tab').click(function(){
        if ($(this).hasClass('disabled')) {          
        }

        else {
            $('.agend-next').text("Seguinte").removeClass(' bfin xxx ');
            $('.agend-back').hide();
        }

    });
    
    $('#v-pills-ltrab-tab').click(function(){
        if ($(this).hasClass('disabled')) {          
        }
        
        else {
            $('.agend-next').text("Seguinte").removeClass(' bfin xxx ');
            $('.agend-back').show();
        }
    });
    
    $('#v-pills-hdate-tab').click(function(){
        if ($(this).hasClass('disabled')) {          
        }
        
        else {
            $('.agend-next').text("Seguinte").removeClass(' bfin xxx ');
            $('.agend-back').show();
        }
    });

    
    $('#v-pills-servpack-tab').click(function(){
        if ($(this).hasClass('disabled')) {          
        }
        
        else {
            $('.agend-next').text("Seguinte").removeClass(' bfin xxx ');
            $('.agend-back').show();
        }
    });

    $('#v-pills-confirm-tab').click(function(){
        if ($(this).hasClass('disabled')) {          
        }
        
        else {
            $('.agend-next').text("Seguinte").removeClass(' bfin xxx ');
            $('.agend-back').show();
        }
    });

    $('#v-pills-conclusion-tab').click(function(){
        if ($(this).hasClass('disabled')) {          
        }
        
        else {
            $('.agend-next').text("Finalizar").addClass(' bfin xxx '); 
            $('.agend-back').show();
        }
    });
    // funcao Next____________________________________________________________
    var ind_AB = '';
    var p_AB = $('#v-pills-ltrab-tab').parent();
    var pai_cont = $('#v-pills-profile').parent();

    $('.agend-next').click(function(){

        actual_p = $('.agend-card.show, #v-pills-tab li a.active');
        next_p =  $('.agend-card.active, #v-pills-tab li a.show').not('active show').next();
        var disabled = '';
        

        if ($('#v-pills-conclusion').hasClass('show')) {
            disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
            $('.agend-next').text("A Carregar...").addClass(' btn bfin xxx ').removeClass('agend-next btn-primary').attr('type', 'submit'); 
        }

        else if ($('#v-pills-confirm-tab').hasClass('show')) {
            disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
            $('.agend-next').text("Finalizar").addClass(' bfin xxx '); 
        }

        else if ($('#v-pills-home-tab').hasClass('show')) {
            if ($('#OP').prop('checked') == true) {
                // _________________________________________________________________________

                var OP = $('#OP_pessoa').val();
                if (OP == 'Escolha a Pessoa'){
                    $('.clsOP').removeClass('d-none');
                }
                else{
                    
                    disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                    $('.agend-back').show();
                }
            } 

            else if ($('#EM').prop('checked') == true) {
                // _________________________________________________________________________


                disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                $('.agend-back').show();
            } 

            else if ($('#EOP').prop('checked') == true) {
                // _________________________________________________________________________

                var EOP = $('#EOP_pessoa').val();
                if (EOP == 'Escolha a Pessoa'){
                    $('.clsEOP').removeClass('d-none');
                }
                else{
                    disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                    $('.agend-back').show();
                }
            } 

            else if ($('#EOPs').prop('checked') == true) {
                // _________________________________________________________________________

                var EOPs = $('#EOPs_pessoa').val();
                if (EOPs == 'Escolha a Pessoa'){
                    $('.clsEOPs').removeClass('d-none');
                }
                else{                
                    disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                    $('.agend-back').show();
                }
            }  

            else if ($('#OsPs').prop('checked') == true) {
                // _________________________________________________________________________

                var OsPs = $('#OsPs_pessoa').val();
                if (OsPs == 'Escolha a Pessoa'){
                    $('.clsOsPs').removeClass('d-none');
                }
                else{
                    
                    disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                    $('.agend-back').show();
                }
            }

            else {
                $('.celebraty').removeClass('d-none');
                console.log('sr_ad');
            }
        }

        else if ($('#v-pills-ltrab-tab').hasClass('show')) {

            var imp = $('#SIT').prop('checked');

            if (imp == true) {
                disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                $('.agend-back').show();
            }

            else {
                var js_srvic = []; 
                $(".js_srvic").each(function() { 
                  js_srvic.push([$(this).val(),$(this).text()]); 
                  // euoutpss.push($(this).val()); 
                });
                console.log(js_srvic);


                var js_lugar = []; 
                $(".js_lugar").each(function() { 
                  js_lugar.push([$(this).val(),$(this).text()]); 
                  // euoutpss.push($(this).val()); 
                });
                console.log(js_lugar);



                var js_categ = []; 
                $(".js_categ").each(function() { 
                  js_categ.push([$(this).val(),$(this).text()]); 
                  // euoutpss.push($(this).val()); 
                });
                console.log(js_categ);
                disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                $('.agend-back').show();            

            } 

        }

        else if ($('#v-pills-servpack-tab').hasClass('show')) { 

            var SIT = $('#SIT').prop('checked');
            var SP = $('#SP').prop('checked');

            var AB = $('#v-pills-ltrab-tab'); // utilizado

            var profile = $('#v-pills-profile'); // utilizado
            var messages = $('#v-pills-messages'); // utilizado
            var confirm = $('#v-pills-confirm');
            var conclusion = $('#v-pills-conclusion');
            var servpack = $('#v-pills-servpack-tab'); // utilizado

            // if ( AB.length ) {
            //     ind_AB = AB;
            // }
            

            if (SIT == true) {

                var s_servic = $('#s_servic').val(); //entradas
                var s_lugar = $('#s_lugar').val(); //entradas
                var c_category = $('#c_category').val(); //entradas
                // console.log(ind_AB);

                // var pai_AB = $('#v-pills-ltrab-tab').parent();
                // var pai_cont = $('#v-pills-profile').parent();
                // console.log(JSON.str p_AB);
                    // AB.parent().addClass('removt');
                    $('.removt').append( "#v-pills-ltrab-tab");

                if ( p_AB.hasClass('removt') ) {  

                    var pai_AB = $('#v-pills-ltrab-tab').parent();
                    // var dt_AB = AB.detach();
                    

                    // BA.parent().append(BA);

                    // messages.addClass('active show');
                    // $('#v-pills-hdate-tab').addClass('active show');
                    // servpack.removeClass('active show disabled');
                    // $('#v-pills-servpack').removeClass('active show disabled');

                    // disabled =  $('#v-pills-messages,#v-pills-hdate-tab').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                    // $('.agend-back').show();                  
                }

                else{


                }

                //     disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                //     $('.agend-back').show();   

                if ( s_servic == ''){
                    $('.clss_servic').removeClass('d-none');
                }
                
                else if( s_lugar == ''){
                    $('.clss_lugar').removeClass('d-none');
                }
                
                else if( c_category == ''){
                    $('.clsc_category').removeClass('d-none');
                }
                
                else{

                    disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                    $('.agend-back').show();  


                }                
            }

            else if (SP == true) {
                var pack_id = $('#pack_id').val();

                if ( pack_id == ''){
                    $('.clspack_id').removeClass('d-none');
                }
                
                else{
                    
                    // var pai_AB = $('#v-pills-ltrab-tab').parent();
                    // var pai_cont = $('#v-pills-profile').parent();
                    p_AB.addClass('removt');
                    var dt_AB = AB.parent().empty();
                    var dt_BA = profile.empty();

                    messages.addClass('active show');
                    $('#v-pills-hdate-tab').addClass('active show');
                    servpack.removeClass('active show disabled');
                    $('#v-pills-servpack').removeClass('active show disabled');

                    // $('#v-pills-messages,#v-pills-hdate-tab').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                    // $('.agend-back').show();                 
                }
            }
            
            else{
                $('.servic_pack').removeClass('d-none');
                console.log('sr_ad');
            }
        }

        else {
            disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
            $('.agend-back').show();
        }
        disabled.removeClass('disabled');
    });

    // funcao Prev____________________________________________________________

    $('.agend-back').click(function(){              
        actual_p = $('.agend-card.show, #v-pills-tab li a.active');
        prev_p =  $('.agend-card.active, #v-pills-tab li a.show').not('active show').prev();


    if ($('#v-pills-confirm-tab').hasClass('show')) {
        $('.agend-next').text("Seguinte").removeClass(' bfin xxx '); 
    }
    

    if ($('#v-pills-conclusion').hasClass('active')) {
        $('.btn.bfin.xxx').text("Seguinte").addClass('agend-next btn-primary').removeClass(' bfin xxx').attr('type', 'button'); 
    }

    $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(prev_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
    $('agend-back').css('display', );


    if ($('#v-pills-home-tab').hasClass('show')) {
        $('.agend-back').hide();
    }
    else {
        $('.agend-back').show();
    }
    }); 
});



$(document).ready(function() {
    $(function () {
      $('[data-toggle="popover"]').popover();
    });

    $(function () {
      $('[data-toggle="popox"]').popover();
    });


})


/*--------------------------------------------------------Ajax-------------------------------------------------------------------------*/ 
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(".prlx").each(function(){
    var $obj = $(this);
    $obj.css('background-position',':60% 0');
    $obj.css('background-attachment','fixed');
    $obj.css('background-size','100%');
    $(window).scroll(function(){
        var offset = $obj.offset();
        var yPos = -($(window).scrollTop()-offset.top)/10;
        var bgpos = '50%'+ yPos +'px';
    $obj.css('background-position',bgpos);
    })
});


/*----------------------------------------------------------------------------------------*/
$('input[type="submit"]').mousedown(function(){
  $(this).css('background', '#2ecc71');
});
$('input[type="submit"]').mouseup(function(){
  $(this).css('background', '#1abc9c');
});

$('#loginform').click(function(){
  $('.login').fadeToggle('slow');
  $(this).toggleClass('green');
});



$(document).mouseup(function (e)
{
    var container = $(".login");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
        $('#loginform').removeClass('green');
    }
});
/*----------------------------------------------------------------------------------------*/





$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll>500) {
            $('.navbar').css("background","white");
            $('.navbar-light .navbar-nav .nav-link').addClass('text-dark');
            $('.navbar-light .navbar-nav .nav-link').removeClass('text-light');

            $('.nav-link #acessa_cs').addClass('text-dark');
            $('.nav-link #acessa_cs').removeClass('text-light');

        } else {
            $('.navbar').css("background","transparent");
            $('.navbar-light .navbar-nav .nav-link').addClass('text-light');
            $('.navbar-light .navbar-nav .nav-link').removeClass('text-dark');
        }
    })
})


  


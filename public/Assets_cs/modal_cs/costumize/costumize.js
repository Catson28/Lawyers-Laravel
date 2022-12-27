$(function(){
    var actual_p, next_p, prev_p, aux;
    $('.agend-back').hide();
    
    // Botoes laterais____________________________________________________________
    $('#v-pills-sel-lawyers').click(function(){
        if ($(this).hasClass('disabled')) {          
        }

        else {
            $('.agend-next').text("Seguinte").removeClass(' bfin xxx ');
            $('.agend-back').hide();
        }

    });
    
    $('#v-pills-personal').click(function(){
        if ($(this).hasClass('disabled')) {          
        }
        
        else {
            $('.agend-next').text("Seguinte").removeClass(' bfin xxx ');
            $('.agend-back').show();
        }
    });

    
    $('#v-pills-Cost').click(function(){
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
    var p_AB = $('#v-pills-personal').parent();
    var pai_cont = $('#v-pills-profile').parent();

    $('.agend-next').click(function(){

        var ind_AB = '';
        p_AB = $('#v-pills-personal').parent();
        pai_cont = $('#v-pills-profile').parent();
        cellebrnt =[] ;

        actual_p = $('.agend-card.show, #v-pills-tab li a.active');
        next_p =  $('.agend-card.active, #v-pills-tab li a.show').not('active show').next();
        var disabled = '';

        if ($('#v-pills-sel-lawyers').hasClass('show')) {
            if ($('#OP').prop('checked') == true) {
                // _________________________________________________________________________
                var OP = $('#OP_pessoa').val();
                // cellebrnt = OP;
                if (OP == 'Escolha a Pessoa'){
                    $('.clsOP').removeClass('d-none');
                }
                else{
                    
                    $('#OP:checked').each(function(i, e) {
                        cellebrnt.push(OP);
                    });   

                    // cellebrnt = OP;                    
                    disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                    $('.agend-back').show();
                }
            } 

            else if ($('#EM').prop('checked') == true) {

                cellebrnt = $('#EM').val();
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

                    $('#EOP:checked').each(function(i, e) {
                        cellebrnt.push($('#EOP').val());
                    }); 

                    $('#EOP:checked').each(function(i, e) {
                        cellebrnt.push(EOP);
                    }); 

                    // cellebrnt = $('#EOP').val();
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
                    cellebrnt = EOPs;
                    // cellebrnt = $('#EOPs').val();
                    $('#EOPs:checked').each(function(i, e) {
                        cellebrnt.push($('#EOPs').val());
                    });                    



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
                    cellebrnt = OsPs;                    
                    disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                    $('.agend-back').show();
                }
            }

            else {
                $('.celebraty').removeClass('d-none');
                console.log('sr_ad');
            }
            console.log(cellebrnt);
        }

        else if ($('#v-pills-Cost').hasClass('show')) {

            var SIT = $('#SIT').prop('checked');
            var SP = $('#SP').prop('checked');

            var AB = $('#v-pills-personal'); // utilizado

            var profile = $('#v-pills-profile'); // utilizado
            var messages = $('#v-pills-messages'); // utilizado
            var confirm = $('#v-pills-confirm');
            var conclusion = $('#v-pills-conclusion');
            var servpack = $('#v-pills-Cost'); // utilizado


            if ((SIT == true) || (SP == true)) {
                if (SIT == true) {

                    var s_servic = $('#s_servic').val(); //entradas
                    var s_lugar = $('#s_lugar').val(); //entradas
                    var c_category = $('#c_category').val(); //entradas
 

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
                        var dt_AB = ($('#v-pills-personal')).parent().removeClass('d-none'); // Local de Trabalho
                        var dt_BA = $('#v-pills-profile').removeClass('d-none');  // Local de Trabalho

                        disabled =  $('#v-pills-personal, #v-pills-profile').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                        $('.agend-back').show();  

                        // disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                        // $('.agend-back').show(); 
                    }                
                }
                else{
                }

                if (SP == true) {
                    var pack_id = $('#pack_id').val();

                    if ( pack_id == ''){
                        $('.clspack_id').removeClass('d-none');
                    }
                    
                    else{
                        
                        // p_AB.addClass('removt');
                        var dt_AB = ($('#v-pills-personal')).parent().addClass('d-none'); // Local de Trabalho
                        var dt_BA = $('#v-pills-profile').addClass('d-none'); // Local de Trabalho

                        disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(($('#v-pills-profile, #v-pills-personal').not('active show').next()).addClass('active show'))).addClass('active show').attr('aria-selected', true);
                        $('.agend-back').show();            
                    }
                }
                else{
                    var pack_id = $('#pack_id').val();

                    if ( pack_id == ''){
                        $('.clspack_id').removeClass('d-none');
                    }
                    
                    else if (SIT == true){


                        disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
     
                        $('.agend-back').show();            
                    } 
                    
                    else{
                        
                        var dt_AB = ($('#v-pills-personal')).parent().removeClass('d-none'); // Local de Trabalho
                        var dt_BA = $('#v-pills-profile').removeClass('d-none'); // Local de Trabalho

                        disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
     
                        $('.agend-back').show();            
                    }                    
                }
            }

            else {
                $('.servic_pack').removeClass('d-none');
                console.log('sr_ad');                
            }

            $.ajax({
              type: 'POST',
              url: 's_lugar',
              cache: false,
              data: {
                '_token': $('input[name=_token]').val(),
                'lugar': $('#s_lugar').val(),
              },
              success: function(data){
                if ((data.errors)) {
                  $('.error').removeClass('d-none');
                  $('.error').text(data.errors.name_ct);
                } else {

                    var len = data.length;
                    console.log(data);
                    $("#lg_escl").empty();
                    $("#lg_escl").append("<option selected='selected' disabled='disabled'>Selecione o Lugar</option>");
                    for( var i = 0; i<len; i++){
                        var id = data[i]['id'];
                        var name = data[i]['name_p'];
                        $("#lg_escl").append("<option value='"+id+"'>"+name+"</option>");

                        // $('#addrsswrk .h4').addClass('d-none');
                        if ($('#addrsswrk .h4').prop('value') == null) {

                            $('#addrsswrk').children('.h4').val('');
                            $('#addrsswrk').children('.h4').attr('value', id);
                            $('#addrsswrk').children('.h4').text(name);
                        }
                        else {
                            if (i == 0) {
                                var first = $('#addrsswrk').first();
                                var phay = $('#addrsswrk').parent().empty();

                                first.appendTo(phay).parent();


                                first.children('.h4').val('');
                                first.children('.h4').attr('value', id);
                                first.children('.h4').text(name);
                            }

                            else {
                                var paiy = $('#addrsswrk').parent();
                                var clony = $('#addrsswrk').clone(true);


                                clony.children('.h4').val('');
                                clony.children('.h4').attr('value', id);
                                clony.children('.h4').text(name);

                                clony.appendTo(paiy).parent();
                            }
                        }
                    }
                }
              },
            });

            $.ajax({
              type: 'POST',
              url: 's_servic',
              cache: false,
              data: {
                '_token': $('input[name=_token]').val(),
                'servic': $('#s_servic').val(),
              },
              success: function(data){
                if ((data.errors)) {
                  $('.error').removeClass('d-none');
                  $('.error').text(data.errors.name_ct);
                } else {

                    var len = data.length;
                    console.log(data);
                    $("#srvc_escl").empty();
                    $("#srvc_escl").append("<option selected='selected' disabled='disabled'>Selecione o Servico</option>");
                    for( var i = 0; i<len; i++){
                        var id = data[i]['id'];
                        var name = data[i]['name'];
                        $("#srvc_escl").append("<option value='"+id+"'>"+name+"</option>");

                        // $('#sev_mat .h4').addClass('d-none');
                        if ($('#sev_mat .h4').prop('value') == null) {

                            $('#sev_mat').children('.h4').val('');
                            $('#sev_mat').children('.h4').attr('value', id);
                            $('#sev_mat').children('.h4').text(name);
                            $('#sev_mat').find('.material.selectmat').addClass(name);
                        }
                        else {
                            if (i == 0) {
                                var first = $('#sev_mat').first();
                                var phay = $('#sev_mat').parent().empty();

                                first.appendTo(phay).parent();


                                first.children('.h4').val('');
                                first.children('.h4').attr('value', id);
                                first.children('.h4').text(name);
 

                            }

                            else {
                                var paiy = $('#sev_mat').parent();
                                var clony = $('#sev_mat').clone(true);


                                clony.children('.h4').val('');
                                clony.children('.h4').attr('value', id);
                                clony.children('.h4').text(name);
                                clony.find('.material.selectmat').addClass(name);

                                clony.appendTo(paiy).parent();


                            }                          

                        }


                                var lehng = data[i]['element'].length;
                                $('.material.selectmat.'+name).empty();
                                $('.material.selectmat.'+name).append("<option selected='selected' disabled='disabled'>Selecione o material</option>");


                                for (var f =  0; f < lehng; f++) {
                                    var ide = data[i]['element'][f]['quotation']['material']['id'];
                                    var namy = data[i]['element'][f]['quotation']['material']['typem'];
                                    $('.material.selectmat.'+name).append("<option value='"+ide+"'>"+namy+"</option>");
                                    // $('.material.selectmat.'+name).parent().find('ul').append("<div value='"+ide+"'>"+namy+"</div>");
                                    console.log('.material.selectmat.'+name);
                                }  








                    }
                }
              },
            });

            $.ajax({
              type: 'POST',
              url: 'c_category',
              cache: false,
              data: {
                '_token': $('input[name=_token]').val(),
                'category': $('#c_category').val(),
              },
              success: function(data){
                if ((data.errors)) {
                  $('.error').removeClass('d-none');
                  $('.error').text(data.errors.name_ct);
                } else {

                    var len = data.length;
                    console.log(data);
                    $("#cat_escl").empty();
                    $("#cat_escl").append("<option selected='selected' disabled='disabled'>Selecione a Categoria</option>");
                    for( var i = 0; i<len; i++){
                        var id = data[i]['id'];
                        var name = data[i]['name_ct'];
                        $("#cat_escl").append("<option value='"+id+"'>"+name+"</option>");
                    }
                }
              },
            }); 
        }

        else if ($('#v-pills-personal').hasClass('show')) {
            var places = [];
            $('.places').each(function(){
                var Elems = [];
                $(this).each(function(){
                  Elems.push($(this).find('#quanty').val());
                });

                $(this).each(function(){
                  Elems.push($(this).find('#cat_escl').val());
                });
                $(this).each(function(){
                  Elems.push($(this).find('#lg_escl').val());
                });
                $(this).each(function(){
                  Elems.push($(this).find('#srvc_escl').val());
                });

                places.push(Elems);
            });
            console.log(places);

            var imp = $('#SIT').prop('checked');

            if (imp == true) {

                // s_servic
                // s_lugar
                // c_category


                var js_srvic = []; 
                $(".js_srvic").each(function() { 
                  js_srvic.push([$(this).val(),$(this).text()]); 
                  // euoutpss.push($(this).val()); 
                });
                // console.log(js_srvic);


                var js_lugar = []; 
                $(".js_lugar").each(function() { 
                  js_lugar.push([$(this).val(),$(this).text()]); 
                  // euoutpss.push($(this).val()); 
                });
                // console.log(js_lugar);



                var js_categ = []; 
                $(".js_categ").each(function() { 
                  js_categ.push([$(this).val(),$(this).text()]); 
                  // euoutpss.push($(this).val()); 
                });
                // console.log(js_categ);
                // disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                // $('.agend-back').show();            

                // console.log(OsPs);



                disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
                $('.agend-back').show();
            }

            else {
            } 
        }

        else if ($('#v-pills-confirm-tab').hasClass('show')) {
            disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
            $('.agend-next').text("Finalizar").addClass(' bfin xxx '); 
        }        

        else if ($('#v-pills-conclusion').hasClass('show')) {

            disabled =  $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(next_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
            $('.agend-next').text("A Carregar...").addClass(' btn bfin xxx ').removeClass('agend-next btn-primary').attr('type', 'submit'); 



            if ($('.btn-group-single.pull-right').has(' btn agend-next btn-primary bfin')) {
                // $('*').autosubmit();
                $.ajax({
                  type: 'POST',
                  url: 'chargEvent',
                  cache: false,
                  data: {
                    '_token': $('input[name=_token]').val(),
                    // 'category': $('#c_category').val(),
                    'cellebrnt': cellebrnt,
                    'selDtlhLgr': places,
                    'EndLug': endrplac,//kjhhjgdfhjlgkjdflhgj
                    'dayStr': $('#d_inicio').val(),
                    'dayEnd': $('#d_fim').val(),
                    'StrHour': $('#h_inicio').val(),
                    'EndHour': $('#h_fim').val(),
                  },
                  success: function(data){
                    if ((data.errors)) {
                      $('.error').removeClass('d-none');
                      $('.error').text(data.errors.name_ct);
                    }
                    
                    else {
                        console.log('sdfgdfgdfgsdfgdfsgdgsdfgsdfgdfgd');
                        top.location='/';
                    }
                  },
                });

            } else {}
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

        else if ($('#v-pills-conclusion').hasClass('active')) {
            $('.btn.bfin.xxx').text("Seguinte").addClass('agend-next btn-primary').removeClass(' bfin xxx').attr('type', 'button'); 
        }

        else if ($('#v-pills-sel-lawyers').hasClass('show')) {
        }

        else if ($('#v-pills-Cost').hasClass('show')) {
            $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(prev_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
            $('agend-back').css('display', );
        }

        else{
        }



        if ($('#v-pills-confirm-tab').hasClass('show')) {
        }
        

        if ($('#v-pills-conclusion').hasClass('active')) {        }

        $('#v-pills-tab li a, .agend-card').removeClass('active show').eq($('.agend-card').index(prev_p.addClass('active show'))).addClass('active show').attr('aria-selected', true);
        $('agend-back').css('display', );


        if ($('#v-pills-sel-lawyers').hasClass('show')) {
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





    $('#d_inicio').change(function() { 
        $.ajax({
          type: 'POST',
          url: 'getD_inicio',
          cache: false,
          data: {
            '_token': $('input[name=_token]').val(),
            'd_star': $('#d_inicio').val(),
          },
          success: function(data){
            if ((data.errors)) {
              $('.error').removeClass('d-none');
              // $('.error').text(data.errors.name_ct);
            } else {
                // console.log(data);
              
            }
          },
        });
    });

    

    
  

$('.btn-group-single.pull-right .btn.agend-next.btn-primary.bfin.xxx:contais("Finalizar")').addClass('d-none');

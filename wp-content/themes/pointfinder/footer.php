<?php $post_type = get_post_type(); ?>
     </div>
 </div> 

<div id="pf-membersystem-dialog"></div>
    <a title="<?php esc_html__('Back to Top','pointfindert2d'); ?>" class="pf-up-but"><i class="pfadmicon-glyph-859"></i></a>

    <footer class="wpf-footer">            
        <div class="container" style="overflow: hidden;">
            <div class="row">

                <div class="col-xs-12 jj-xs-offiset-2 col-sm-4 col-md-3 col-lg-3 col-lg-offset-2 left">
                  <h2>Contáctanos</h2>
                    <strong>Tlf:</strong> +52 (55) 1791.4931/  +52 (55) 66319264 <br>
                    <strong>Email:</strong>  contactomex@kmimos.la
                </div>
                <div class="col-sm-4 jj-xs-offiset-2 col-md-3 center col-lg-3 center">
                    <h2>Navega</h2>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="https://www.kmimos.com.mx/tips-e-informacion-sobre-perros/">Blog</a></li>
                        <li><a href="#">Preguntas y Respuestas</a></li>
                        <li><a href="#">Cobertura Veterinaria</a></li>
                        <li><a href="#">Comunicados de prensa</a></li>
                        <li><a href="#">Términos y Condiciones</a></li>
                        <li><a href="#">Nuestros Aliados</a></li>
                        <li><a href="https://www.kmimos.com.mx/contacto/">Contáctanos</a></li>
                    </ul>
                </div>
            
                <div class="hidden-xs col-sm-4  col-md-3 col-lg-3 right">
                    <h2>¡B&uacute;scanos en nuestra redes sociales!</h2>
                    <div class="socialBtns">
                        <a href="https://www.facebook.com/Kmimosmx" target="_blank" class="facebookBtn socialBtn" title="@kmimosmx"></a>
                        <a href="https://www.twitter.com/Kmimosmx"  target="_blank"class="twitterBtn socialBtn" title="@kmimosmx"></a>
                        <a href="https://www.instagram.com/kmimosmx/" target="_blank" class="instagramBtn socialBtn" title="@kmimosmx"></a>
                        <img class=" easyload" data-original="<?php bloginfo( 'template_directory' ); ?>/images/dog.png" src="" alt="">
                    </div>
                </div>
            </div> 
        </div>

        <div class="jj-xs-offiset-2 col-md-offset-1 col-md-offset-3 jj-offset-2 inline" >
            <span id="siteseal">
                <script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=c5u9pjdoyKXQ6dRtmwnDmY0bV6KVBrdZGPEAnPkeSt7ZRCetPjIUzVK0bnHa"></script>
            </span>  
            <?php if($post_type=='post'){ ?>
                <a class="inline" href="http://es.paperblog.com/" rel="paperblog kmimos" title="Paperblog : Los mejores artículos de los blogs" ><img src="/wp-content/uploads/iconos/paperblog.gif" border="0" alt="Paperblog : Los mejores artículos de los blogs" width="131" height="32"/></a>
                <a class="inline" href="http://www.boosterblog.es" target="_blank"><img src="/wp-content/uploads/iconos/boosterblog-es-logo.png" width="131" height="32" alt="Publicidad por tu blog con Boosterblog" /></a>
            <?php } ?>
        </div>
    </footer>
        <?php wp_footer(); ?>

        <style type="text/css">
            .wcvendors_sold_by_in_loop{
                display: none !important;
            }
            .wc-bookings-booking-form .wc-bookings-booking-cost{
                margin: 0px 0px 10px !important;
            }
            .wc-bookings-booking-cost{
                position: relative !important;
                left: initial;
                margin-left: 0px !important;
                top: 0px !important;
            }

            .product .related{
                clear: both !important;
            }
            
            .switch-candy span {
                color: #000000 !important;
            }

            .woocommerce .cart .button, .woocommerce .cart input.button {
                float: none;
                color: #000 !important;
            }
            .vc-image-carousel .vc-carousel-slideline-inner .vc-inner img {
                -webkit-filter: grayscale(0%) !important;
                filter: grayscale(0%) !important;
                opacity: 1 !important;
            }

            .wpmenucartli {
                display: none !important;
            }
        </style>

        <style>
            .kmi_link{
                font-size: initial; 
                color: #54c8a7;
                text-transform: capitalize;
                font-weight: bold;
            }

            a.kmi_link:hover{
                color:#138675!important;
            }
            .kmi_link:hover{
                color:#138675!important;
            }
            .wpmenucartli{
                display: none !important;
            }

            @media (min-width: 1200px){
                .jj-offset-2 {
                    margin-left: 16.66666667%!important;
                }
            }
            @media (min-width: 994px){
                .jj-patica-menu{
                    display: none;
                }
                .inline{
                    display: inline;
                    margin-bottom:3px;
                }

            }
            @media (max-width: 120px) and (min-width: 962px){
                .socialBtns{
                     padding-left: 6px!important;
                }
            }
    
            @media (max-width: 962px){
                .socialBtns{
                    padding-left: 0px;
                }
            }
            @media screen and (max-width: 750px){
                .vlz_modal_ventana{
                    width: 90% !important;
                }
                .jj-xs-offiset-2{
                    margin-left: 20%;
                }

                .inline{
                    display: block;
                }
            }

            @media (max-width: 520px){
                .vlz_modal_contenido{
                    height: 300px;
                }
            }           

        </style>

        <script>
            function ocultarModal(){
                jQuery('#jj_modal_finalizar_compra').fadeOut();
                jQuery('#jj_modal_finalizar_compra').css('display', 'none');
            }
        </script>

        <?php
            global $wpdb;
            if( isset( $_GET['r'] ) ){
                $xuser = $wpdb->get_row("SELECT * FROM wp_users WHERE md5(ID) = '{$_GET['r']}'");
            }else{
            
                if( isset( $_GET['a'] ) ){
                    echo "
                        <script>
                            (function($) {
                                'use strict';
                                $(function(){
                                    $.pfOpenLogin('open','login');
                                })
                               })(jQuery);
                        </script>
                    ";
                }
            }

            if( $post->post_name == "carro" ){

                echo "
                    <script>
                        jQuery('.woocommerce-message>a.button.wc-forward').css('display', 'none');
                        jQuery('.variation-Duracin').css('display', 'none');
                        jQuery('.variation-Ofrecidopor').css('display', 'none');
                    </script>

                    <style>
                        .woocommerce-message>a.button.wc-forward{
                            display; none;
                        }
                        input[name=coupon_code]{color: #000!important;}
                        input[name=update_cart]{display: none!important;}
                    </style>
                    <script>
                        jQuery( document ).ready(function() {
                            jQuery('.woocommerce-message>a.button.wc-forward').css('display', 'none');
                        });
                    </script>
                ";
            }
            if( $post->post_name == "perfil-usuario" ){
                echo "
                    <script>
                        var es_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;  
                        if(es_firefox){
                            jQuery('input[name=pet_birthdate]').datepicker('destroy');
                            jQuery('input[name=pet_birthdate]').removeAttr('min');  
                            jQuery('input[name=pet_birthdate]').removeAttr('max');
                            jQuery('input[name=pet_birthdate]').prop('readonly', true); 

                            if (jQuery(window).width() > 550) {
                                jQuery( 'input[name=pet_birthdate]' ).datepicker({ 
                                    option: 'dd/mm/yy',
                                    changeMonth: true,
                                    changeYear: true,
                                    minDate: '-30y',
                                    maxDate: '-1d',
                                    dataFormat: 'dd/mm/yy',
                                });
                            }
                        }
                    </script>
                    <style>
                        @media (max-width: 568px){ 
                            .cell50{width:100%!important;}
                            .cell25{width:50%!important;}
                        }
                    </style>
                ";
            }
            if( $post->post_name == "conocer-al-cuidador" ){

                echo "
                    <script>
                        var es_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;  
                        var mdate = '0d';
                        if(es_firefox){
                            if (jQuery(window).width() > 550) {

                                jQuery('input[name=meeting_when],input[name=service_start],input[name=service_end]').datepicker('destroy');
                                jQuery('input[name=meeting_when]').removeAttr('min');
                                jQuery('#service_start').prop('disabled', true);
                                jQuery('#service_end').prop('disabled', true);

                                 jQuery( function() {
                                    var dateFormat = 'mm/dd/yy',
                                      from = jQuery( '#meeting_when' )
                                        .datepicker({
                                            option: 'dd/mm/yy',
                                            changeMonth: true,
                                            changeYear: true,
                                            minDate: '0d',
                                            maxDate: '1y',
                                            dataFormat: 'dd/mm/yy',
                                        })
                                        .on( 'change', function() {
                                          to.datepicker( 'option', 'minDate', getDate( this ) );
                                          jQuery('#service_start').prop('disabled', false);

                                        }),
                                      to = jQuery( '#service_start' ).datepicker({
                                        option: 'dd/mm/yy',
                                        changeMonth: true,
                                        changeYear: true,
                                        maxDate: '1y',
                                        dataFormat: 'dd/mm/yy',
                                      })
                                      .on( 'change', function() {
                                        toto.datepicker( 'option', 'minDate', getDate( this ) );
                                        jQuery('#service_end').prop('disabled', false);
                                      }),
                                      toto = jQuery( '#service_end' ).datepicker({
                                        option: 'dd/mm/yy',
                                        changeMonth: true,
                                        changeYear: true,
                                        maxDate: '1y',
                                        dataFormat: 'dd/mm/yy',
                                      });
                                 
                                    function getDate( element ) {
                                      var date;
                                      try {
                                        date = jQuery.datepicker.parseDate( dateFormat, element.value );
                                      } catch( error ) {
                                        date = null;
                                      }
                                 
                                      return date;
                                    }
                                } );
                                jQuery('input[name=meeting_when],input[name=service_start],input[name=service_end]').prop('readonly', true);
                            }
                        }
                    </script>
                ";
            }

            if( $post->post_name == "finalizar-comprar" && $_GET['key'] == "" ){

            echo "
                <style>
                    .jj_modal{
                        position: fixed;
                        top: 0px;
                        left: 0px;
                        width: 100%;
                        height: 100%;
                        display: table;
                        z-index: 10000000000!important;
                        background: rgba(0, 0, 0, 0.8);
                        vertical-align: middle !important;
                        display: none;
                    }
                    .jj_modal_interno{
                        display: table-cell;
                        text-align: center;
                        vertical-align: middle !important;
                    }
                    .jj_modal_ventana{
                        position: relative;
                        display: inline-block;
                        text-align: left;
                        width: 40%;
                        box-shadow: 0px 0px 4px #FFF;
                        border-radius: 5px;
                        z-index: 1000;
                    }
                    .jj_modal_titulo{
                        background: #FFF;
                        padding: 15px 10px;
                        font-size: 18px;
                        color: #52c8b6;
                        font-weight: 600;
                        border-radius: 5px 5px 0px 0px;
                    }
                    .jj_modal_contenido{
                        background: #FFF;
                        height: auto;
                        box-sizing: border-box;
                        padding: 5px 15px;
                        border-top: solid 1px #d6d6d6;
                        border-bottom: solid 1px #d6d6d6;
                        overflow: auto;
                        text-align: justify;
                    }
                    .jj_modal_pie{
                        background: #FFF;
                        padding: 15px 10px;
                        border-radius: 0px 0px 5px 5px;
                        height: 70px;
                    }
                    .jj_modal_fondo{
                        position: fixed;
                        top: 0px;
                        left: 0px;
                        width: 100%;
                        height: 100%;
                        z-index: 500;
                    }
                    .jj_boton_siguiente{
                        padding: 10px 50px;
                        background-color: #a8d8c9;
                        display: inline-block;
                        font-size: 16px;
                        border: solid 1px #2ca683;
                        border-radius: 3px;
                        float: right;
                        cursor: pointer;
                    } 
                    @media screen and (max-width: 750px){
                        
                    }
                    @media (max-width: 520px){
                        .jj_modal_ventana{
                            width: 84% ;
                        }
                    }
                </style>                         
                <div id='jj_modal_jauregui' class='jj_modal'>
                    <div class='jj_modal_interno'>
                        <div class='jj_modal_fondo' onclick='jQuery('#jj_modal_bienvenida').css('display', 'none');'></div>
                        <div class='jj_modal_ventana jj_modal_ventana'>
                            <div class='jj_modal_titulo'>¡Espera!</div>
                            <div class='jj_modal_contenido' style='height: auto;'>
                                    <p align='center'>
                                        Transacción en progreso, esta ventana se cerrará automáticamente.<img src='https://www.kmimos.com.mx/wp-content/uploads/2016/02/preloader.gif'>
                                    </p> 
                            </div>
                        </div>
                    </div>
                </div>";
            }
        ?>

        <script type="text/javascript">
            jQuery( document ).ready(function() {
                jQuery( ".reservar" ).unbind();
                jQuery( ".reservar" ).off();
                jQuery( ".conocer-cuidador" ).unbind();
                jQuery( ".conocer-cuidador" ).off();
                <?php
                    if( $post->post_name == "finalizar-comprar" ){
                        echo '
                            jQuery(".payment_method_wc-booking-gateway").css("display", "none");
                        ';
                    }
                ?>
            });
            <?php if( $post->post_name == "finalizar-comprar" && $_GET['key'] == "" ){ ?>
                var abrir = true;
                jQuery(window).scroll(function() {
                    if (jQuery(document).scrollTop() > 10) {
                        jQuery('#vlz_modal_popup').fadeOut();
                    }
                });
            <?php } ?>
        </script>
        <?php
            if(  $_SESSION['admin_sub_login'] == 'YES' ){
                echo "
                    <a href='".get_home_url()."/?i=".md5($_SESSION['id_admin'])."&admin=YES' style='
                        position: fixed;
                        display: inline-block;
                        left: 50px;
                        bottom: 50px;
                        padding: 20px;
                        font-size: 48px;
                        font-family: Roboto;
                        background: #CCC;
                        border: solid 2px #BBB;
                        z-index: 999999999999999999;
                    '>
                        X
                    </a>
                ";
            }

            // Modificacion Ángel Veloz
            $DS = kmimos_session();
            if( $DS ){
                if( isset($DS["reserva"]) ){
                    echo "
                        <a href='".get_home_url()."/wp-content/themes/pointfinder/vlz/admin/process/mybookings_modificar.php?b=".$user_id."' style='
                            position: fixed;
                            display: inline-block;
                            left: 50px;
                            bottom: 50px;
                            padding: 8px;
                            font-size: 20px;
                            font-family: Roboto;
                            background: #61ccac;
                            border: solid 2px #313131;
                            z-index: 999999999999999999;
                            color: #FFF;
                        '>
                            Salir de modificar reserva
                        </a>
                    ";
                }
            }
        ?>

        <?php 
        # Scritp Mixpanel Javascript Solo para "Home"
        if( is_front_page() ){ ?> 
            <script>      
                mixpanel.identify();
                var distinct_ID = mixpanel.get_distinct_id();
                document.getElementById('pf-search-button-manual').addEventListener("click", ClickBuscar);

                function ClickBuscar() {

                p=document.getElementsByClassName('boton_portada boton_servicio activo');

                for (i = 0; i< p.length; i++) {
                var tt = p[i].getElementsByTagName('input');
                var id = "#" + jQuery (tt).attr('id');
                console.log(id);
                if( jQuery (id).prop('checked'))    {

                  console.log('chequiao')
                  var nombre = jQuery (tt).attr('value')
                  mixpanel.people.set({ nombre: "si" });
                                                    }
                                              }
                  var estadoss = document.getElementById("estado_cuidador");
                  var municipioss = document.getElementById("municipio_cache");
                  mixpanel.people.set({ 'estadoBuscado' : estadoss });
                  mixpanel.people.set({ 'municipioBuscado' : municipioss });
                  var FechadeBusqueda = new Date();
                  mixpanel.people.set({ 'UltimaFechaDeBusqueda' : FechadeBusqueda });

                }
            </script>
        <?php } ?>
        

        <?php if(isset($_GET['ua'])){ ?>
            <?php if($_GET['ua'] == 'profile'){ ?>
            <script>
mixpanel.identify();
var distinct_ID = mixpanel.get_distinct_id();
sidebarList= document.getElementsByTagName("ul")[7];
verificarCuidador= sidebarList.getElementsByTagName("li")[5];

if (verificarCuidador.innerText == 'CUIDADOR') {
  mixpanel.people.set({ 'TipoDeUsuario': 'Cuidador' });
} else {
    mixpanel.people.set({ 'TipoDeUsuario': 'Cliente' });
}



perfil=document.getElementsByClassName('input');

for (i = 0; i<perfil.length; i++){

if (i == 7){
var perfilvalue = perfil[i].value

mixpanel.people.set({ $email: perfilvalue });

}
else {
var perfilname = perfil[i].name
var perfilvalue = perfil[i].value
mixpanel.people.set({ perfilname: perfilvalue });
//mixpanel.people.set({ 'UltimaFechaDeBusqueda' : FechadeBusqueda });
}
}
//document.getElementById('pf-search-button-manual').addEventListener("click", ClickBuscar);
document.getElementById('pf-ajax-profileupdate-button').addEventListener("click", ActualizarPerfil);
function ActualizarPerfil() {

  perfil=document.getElementsByClassName('input');

  for (i = 0; i<perfil.length; i++){

    if (i == 7){

      var perfilvalue = perfil[i].value
    mixpanel.people.set({ $email: perfilvalue });

  } else {
    var perfilname = perfil[i].name
    var perfilvalue = perfil[i].value
  mixpanel.people.set({ perfilname: perfilvalue });
        }
  }


}



</script>
            <?php } ?>
        <?php } ?>
        


    </body>
</html>
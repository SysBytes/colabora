$(document).ready(function() {

    $(".btn-menu").click(function(){
        openMenu();
    });

    $(".btn-close").click(function(){
        closeMenu();
    });

    $('#fullpage').fullpage();

    var ancho = $(window).width();
    if(ancho < 768){
        $.fn.fullpage.setResponsive(true);
    }

    $(".content-btn").click(function(){
        var data = $(this).attr("data");

        if($(this).hasClass("active")){
            $(".content").fadeOut();
            $(".content-btn").removeClass("active");
            return;
        }

        $(".content").hide();
        $(".content-btn").removeClass("active");
        $(this).addClass("active");

        $("#"+data).fadeIn();
    });

    $(".link-btn").click(function(){
        var page = $(this).attr("data");
        $.fn.fullpage.moveTo(page);
    });

    $(".item-menu").click(function(){
        var page = $(this).attr("link-page");
        var data = $(this).attr("data");
        
        $.fn.fullpage.moveTo(page);

        $(".content").hide();
        $(".content-btn").removeClass("active");
        $(".content-btn[data='"+data+"']").addClass("active");
        $("#"+data).fadeIn();
        closeMenu();
    });

    $("#g-espacios").unitegallery({
        gallery_theme: "tilesgrid",
        grid_num_rows: 2,
        theme_navigation_type:"arrows",
        tile_enable_shadow: false,
        tile_border_width: 1,
        lightbox_type: "compact",
        lightbox_slider_image_border: false,
        lightbox_slider_image_shadow: false,
        lightbox_show_numbers: false,
        lightbox_slider_control_zoom: false
    });

    $("#g-fotos").unitegallery({
        gallery_theme: "tilesgrid",
        grid_num_rows: 2,
        theme_navigation_type:"arrows",
        tile_enable_shadow: false,
        tile_border_width: 1,
        lightbox_type: "compact",
        lightbox_slider_image_border: false,
        lightbox_slider_image_shadow: false,
        lightbox_show_numbers: false,
        lightbox_slider_control_zoom: false,
        lightbox_show_textpanel: false
    });

    $("#g-videos").unitegallery({
        gallery_theme: "tilesgrid",
        grid_num_rows: 2,
        theme_navigation_type:"arrows",
        tile_enable_shadow: false,
        tile_border_width: 1,
        lightbox_type: "compact",
        lightbox_slider_image_border: false,
        lightbox_slider_image_shadow: false,
        lightbox_show_numbers: false,
        lightbox_slider_control_zoom: false,
        tile_as_link:true
    });

    $("#g-empresas").unitegallery({
        gallery_theme: "tilesgrid",
        grid_num_rows: 2,
        theme_navigation_type:"arrows",
        lightbox_type: null,
        tile_enable_shadow: false,
        tile_border_width: 1,
        lightbox_type: "compact",
        lightbox_slider_image_border: false,
        lightbox_slider_image_shadow: false,
        lightbox_show_numbers: false,
        lightbox_slider_control_zoom: false,
        tile_as_link:true
    });

    $('.date').datepicker({ 
        minDate: 0,
        dateFormat: 'dd-mm-yy'
    });

    $(".btn-send").click(function(){

        if($("#formContact").valid()) {
            var name = $("#nombre").val();
            var apellido = $("#apellido").val();
            var email = $("#email").val();
            var telefono = $("#telefono").val();
            var fecha = $("#fecha").val();
            var mensaje = $("#mensaje").val();
            
            var dataString = 'nombre='+ name + '&apellido='+ apellido +'&telefono=' + telefono + '&email=' + email  + '&fecha=' + fecha + '&mensaje=' + mensaje;
            
            /*alert (dataString);return false;*/
            $("body").css({"overflow-y":"hidden"});
            var alto = $(window).height();
            $("body").append("<div id='pre-load-web'><div id='imagen-load'><img src='img/loader.gif' alt=''/><h1>Realizando Validación</h1></div></div>"); 
            $("#pre-load-web").css({"height":alto+"px"}); 
            $("#imagen-load").css({"margin-top":(alto/2)-30+"px"});

            $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: dataString
            }).done(function(msg) {
                if(msg==0){
                    var gracias = $('.gracias').html();
                    $(".form__detail").html(gracias);
                } else {
                    alert("Se presentó un inconveniente al tratar de enviar el mensaje.")
                } 
            });
        }
        return false;
    });

    $(window).resize(function() {
        var ancho = $(window).width();
        if(ancho < 768){
            $.fn.fullpage.setResponsive(true);
        } else {
            $.fn.fullpage.setResponsive(false);
            $('.menu').css("top", "0px");
        }
    });

    $(window).scroll(function() {
        var ancho = $(window).width();
        if(ancho < 768){
            var alto = $(window).scrollTop();
            $('.menu').css("top", alto+"px");
        }
    });
});

function closeMenu(){
    $('.menu').hide("slide", { direction: "right" }, 500);
}

function openMenu(){
    $('.menu').show("slide", { direction: "right" }, 500);
}



$(document).ready(function() {

    $('#fullpage').fullpage();

    var ancho = $(window).width();
    if(ancho < 768){
        $.fn.fullpage.setResponsive(true);
    }
    
    $(".content-btn").click(function(){
        var data = $(this).attr("data-src");

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

    $("#g-espacios").unitegallery({
        gallery_theme: "tilesgrid",
        grid_num_rows: 2,
        theme_navigation_type:"arrows"
    });

    $("#g-fotos").unitegallery({
        gallery_theme: "tilesgrid",
        grid_num_rows: 2,
        theme_navigation_type:"arrows"
    });

    $("#g-videos").unitegallery({
        gallery_theme: "tilesgrid",
        grid_num_rows: 2,
        theme_navigation_type:"arrows"
    });

    $("#g-empresas").unitegallery({
        gallery_theme: "tilesgrid",
        grid_num_rows: 2,
        theme_navigation_type:"arrows",
        lightbox_type: null
    });

    $('.date').datepicker();


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
        }
    });
});



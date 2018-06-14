$(document).ready(function() {

    $('.item__detail').click(function(){

        var item = $(this).attr('data-item');

        if($(this).hasClass("active")) {
            $(this).removeClass('active');
            $(".item__content-"+item).slideUp("slow");
        } else {
            $(".item__detail").removeClass('active');
            $(this).addClass('active');

            $(".item__content").slideUp("400", function(){
                setTimeout(function(){
                    $(".item__content-"+item).slideDown("slow")
                }, 500);
            });
        }
    });

    $('.quotes').slick({
        autoplay: true,
        fade: true,
        arrows: false
    });

    $('.arrow_next').click(function(){
        $('.quotes').slick('slickNext');
    })
    $('.arrow_prev').click(function(){
        $('.quotes').slick('slickPrev');
    });
    $(".btn-send").click(function(){

        if($("#formContact").valid()) {
            var name = $("#nombre").val();
            var apellido = $("#apellido").val();
            var email = $("#email").val();
            var telefono = $("#telefono").val();
            var mensaje = $("#mensaje").val();
            
            var dataString = 'nombre='+ name + '&apellido='+ apellido +'&telefono=' + telefono + '&email=' + email + '&mensaje=' + mensaje;
            
            /*alert (dataString);return false;*/
            $.ajax({
                type: "POST",
                url: "sendmail.php",
                data: dataString
            }).done(function(msg) {
                if(msg==0){
                    var gracias = $('.gracias').html();
                    $(".form__detail").html(gracias);
                }
            });
        }
        return false;
    });

});


$(function(){
    $('.scroll-down').click(function(){
        var href = $(this).attr('href');
        $('html, body').animate({ scrollTop : $(href).offset().top}, 1000);
    });

    var top = $('#about').position().top;

    var about   = $('#about').position().top;
    var doh     = $('#do').position().top;
    var client  = $('#client').position().top;
    var contact = $('#contact').position().top;

    $(window).scroll(function() {

        if ($(this).scrollTop() >= top - 80) {
            $('nav.menu').fadeIn("fast");
        }
        else {
            $('nav.menu').fadeOut("fast");
        }

        //Activo la opción del menú
        $(".main-menu li>a").removeClass('active');
        if($(this).scrollTop() >= about && $(this).scrollTop() < doh){
            if(!$('.main-menu li>a#menu-1').hasClass('active')){
                $('.main-menu li>a#menu-1').addClass('active');
            }
        } else if($(this).scrollTop() >= doh && $(this).scrollTop() < client){
            if(!$('.main-menu li>a#menu-2').hasClass('active')){
                $('.main-menu li>a#menu-2').addClass('active');
            }
        } else if($(this).scrollTop() >= client && $(this).scrollTop() < contact-5){
            if(!$('.main-menu li>a#menu-3').hasClass('active')){
                $('.main-menu li>a#menu-3').addClass('active');
            }
        } else if($(this).scrollTop() >= contact-5){
            if(!$('.main-menu li>a#menu-4').hasClass('active')){
                $('.main-menu li>a#menu-4').addClass('active');
            }
        }

    });

    $('.airplane').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $('.logo-preview').remove();
        $("h1.logo").removeClass('hidden');
        $(".play__video").removeClass('hidden');
        $('.play__video').fadeTo(100, 1);
    });

    $('.logo-complete').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        /*$(this).fadeOut(1600, function(){
            //$('.logo-incomplete').fadeTo(100, 1);
            $('.logo-incomplete').removeClass('hidden');
        });*/

    });

    $(".play__video").click(function(event){
        $(".section-container").fadeOut();
        $(".video-container").fadeIn();
        $(".cerrar").fadeIn();
        autoPlayVideo('EWEQbyX0qag');
    });

    $(".cerrar").click(function(event){
        $(".cerrar").fadeOut();
        $(".video-container").fadeOut();
        $(".section-container").fadeIn();
        $(".video-container").html('');
    });

});

function autoPlayVideo(vcode, width, height){
    "use strict";
    $(".video-container").html('<iframe src="https://www.youtube.com/embed/'+vcode+'?autoplay=1&loop=1&rel=0&wmode=transparent&modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allowfullscreen wmode="Opaque"></iframe>');
}


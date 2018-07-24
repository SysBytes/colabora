$(document).ready(function() {

   
    $('#fullpage').fullpage({
        verticalCentered: true
    });

    var ancho = $(window).width();
    if(ancho < 768){
        $.fn.fullpage.setResponsive(true);
    }

    $(window).resize(function() {
        var ancho = $(window).width();
        if(ancho < 768){
            $.fn.fullpage.setResponsive(true);
        } else {
            $.fn.fullpage.setResponsive(false);
        }
    });

});

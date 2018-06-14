$(document).ready(function() {

    $('#fullpage').fullpage();

    $(".content-btn").click(function(){
        var data = $(this).attr("data-src");

        if($(this).hasClass("active")){
            $(".content").fadeOut();
            $(".content-btn").removeClass("active");
            return;
        }

        $(".content").fadeOut();
        $(".content-btn").removeClass("active");
        $(this).addClass("active");

        $("#"+data).fadeIn();
    });
});
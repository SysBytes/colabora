$(document).ready(function() {

    $('#fullpage').fullpage();

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
});
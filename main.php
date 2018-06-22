<div class="container">
    <div class="container-logo">
        <a href="#home"><img src="img/logo-colabora.png" alt="Co+Labora" title="Co+Labora" class="img-responsive"></a>
    </div>
    <div class="nav">
        <img src="img/ico-menu.png" class="btn-menu" title="Menú" alt="Menú Principal">
    </div>
</div>
<div id="fullpage" class="container-fluid">
    <div class="section section__home bg-1-<?php echo $bg;?>" data-anchor="home">
        <?php include "home.php"; ?>
    </div>
    <div class="section section__space bg-2-<?php echo $bg;?>" data-anchor="space">
        <?php include "page_spaces.php"; ?>
    </div>
    <div class="section section__creation bg-3-<?php echo $bg;?>" data-anchor="creation">
        <?php include "page_create.php"; ?>
    </div>
    <div class="section section__colabora bg-4-<?php echo $bg;?>" data-anchor="colaborar">
        <?php include "page_colabora.php"; ?>
    </div>
    <div class="section section__agendar bg-5-<?php echo $bg;?>" data-anchor="agendar">
        <?php include "page_contact.php"; ?>
    </div>
    <div class="section section__aqui" data-anchor="aqui">
        <div class="map" id="map"></div>
        <div class="bg"></div>
        <?php include "page_here.php"; ?>
    </div>
</div>
<script>
    function initMap() {
        var colabora = {lat: 4.697206, lng: -74.030452};
        var centro = {lat: 4.697364, lng: -74.031495};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: centro
        });

        var image = "img/target.png";
        var marker = new google.maps.Marker({
            position: colabora,
            map: map,
            icon: image
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQaoA5g8ej06KRupQU5A-wUcSnpwWgOcw&callback=initMap"></script>
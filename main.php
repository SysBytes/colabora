<div class="container">
    <div class="container-logo">
        <img src="img/logo-colabora.png" alt="Co+Labora" title="Co+Labora" class="img-responsive">
    </div>
</div>
<div id="fullpage" class="container-fluid">
    <div class="section section__home bg-1-1" data-anchor="home">
        <?php include "home.php"; ?>
    </div>
    <div class="section section__space bg-2-1" data-anchor="space">
        <?php include "page_spaces.php"; ?>
    </div>
    <div class="section section__creation bg-3-1" data-anchor="creation">
        <?php include "page_create.php"; ?>
    </div>
    <div class="section section__colabora bg-4-1" data-anchor="colaborar">
        <?php include "page_colabora.php"; ?>
    </div>
    <div class="section section__agendar bg-5-1" data-anchor="agendar">
        <?php include "page_contact.php"; ?>
    </div>
    <div class="section section__aqui bg-6" data-anchor="aqui">
        <div class="map" id="map"></div>
        <?php include "page_here.php"; ?>
    </div>
</div>
<script>
    function initMap() {
        var colabora = {lat: 4.697206, lng: -74.030452};
        var centro = {lat: 4.697364, lng: -74.031495};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 19,
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
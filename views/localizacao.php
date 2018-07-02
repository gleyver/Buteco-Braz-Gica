<?php $coluna =null; ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="../css/basePagina.css">
    <link rel="stylesheet" href="../css/style_localizacao.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <?php require_once 'nav.php'; ?>
    <?php //require_once 'header.php' ?>
    <main>
      <div class="linha_invisivel"></div>
      <div class="suporte_titulos">
        <div class="titulos">Localização</div>
      </div>

      <div class="conteudo">
      </br>
        <div class="titulos">Aonde Estamos</div>

        <div id="map"></div>
        <div class="localizacao">

          <p class="texto_localizacao">Rua General Bitencourt, 221 - Centro, Osasco - SP, Brasil</p>
        </div>


      </main>
      <?php require_once 'footer.php'; ?>
      <!-- Google Maps -->
      <script>
        function initMap() {
          var uluru = {lat: -23.5338636, lng: -46.7811163};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 19,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChOOhHq12LWYndEM_JPwsI7AM_WIX3R2M&callback=initMap">
      </script>
      </div>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
</html>

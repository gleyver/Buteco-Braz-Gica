
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="../css/basePagina.css">
    <link rel="stylesheet" href="../css/style_dashboard.css">
    <link rel="stylesheet" href="../css/style_fale_conosco.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <?php require_once 'nav.php'; ?>
    <?php require_once 'header.php' ?>
    <main>
      <div class="linha_invisivel"></div>
      <div class="suporte_titulos">
        <div class="titulos">Ambiente</div>
      </div>
      <div class="suporte_ambientes">
        <div class="fg_imagem">
          <img src="../imagens/ambiente_bar_3.jpg" alt="" class="imagem_ambiente">
          <img src="../imagens/ambiente_bar_4.jpg" alt="" class="imagem_ambiente">
          <img src="../imagens/ambiente_bar_5.jpg" alt="" class="imagem_ambiente">
        </div>
        <div class="texto_ambiente">
          <span class="formatacao_texto_ambiente">
            O vídeo fornece uma maneira poderosa de ajudá-lo a provar seu argumento. Ao clicar em Vídeo Online, você pode colar o código de inserção do vídeo que deseja adicionar. Você também pode digitar uma palavra-chave para pesquisar online o vídeo mais adequado ao seu documento.
            Para dar ao documento uma aparência profissional, o Word fornece designs de cabeçalho, rodapé, folha de rosto e caixa de texto que se complementam entre si. Por exemplo, você pode adicionar uma folha de rosto, um cabeçalho e uma barra lateral correspondentes. Clique em Inserir e escolha os elementos desejados nas diferentes galerias.
            Temas e estilos também ajudam a manter seu documento coordenado. Quando você clica em Design e escolhe um novo tema, as imagens, gráficos e elementos gráficos SmartArt são alterados para corresponder ao novo tema. Quando você aplica estilos, os títulos são alterados para coincidir com o novo tema.
            Economize tempo no Word com novos botões que são mostrados no local em que você precisa.
            <div class="cardapio_menu">

            </div>
          </span>
        </div>
      </div>
      <div class="suporte_titulos">
        <div class="titulos">Eventos</div>
      </div>
      <div class="suporte_eventos">
        <div class="suporte_fotos">
          <img src="../imagens/Aniversariante.jpg" alt="" class="imagem_eventos">
        </div>

        <div class="suporte_fotos">
          <img src="../imagens/SEXTA_2206.jpg" alt="" class="imagem_eventos">
        </div>

        <div class="suporte_fotos">
          <img src="../imagens/SABADO_2306.jpg" alt="" class="imagem_eventos">
        </div>
      </div>
      <!-- <br> -->
      <div class="suporte_titulos">
        <div class="titulos">Cardapio Braz Gica</div>
      </div>
      <div class="conteudo_cardapio">
        <br/>
        <div class="titulos_cardapio">
          <div class="texto_titulos">Cervejas</div>
        </div>
        <div class="suporte_texto_cardapio">
          <p class="texto_cardapio">
            Amstel | Baden Baden | Brahma | Budweiser | Devassa | Eisenbahn | Heineken | Original |
            Proibida | Skol
          </p>
        </div>
        <br/>

        <div class="titulos_cardapio">
          <div class="texto_titulos">Drinks</div>
        </div>
        <div class="suporte_texto_cardapio">
          <p class="texto_cardapio">
            Chandon | Mioranza | Carbernet | Red Label | Black Label | Balantines | Jack Daniels
            | White Horse | Chinvas | Tequila | Caipirinha | Catuaba | Askov | Cachaças | Vodkas
          </p>
        </div>
        <br/>

        <div class="titulos_cardapio">
          <div class="texto_titulos">Bebidas</div>
        </div>
        <div class="suporte_texto_cardapio">
          <div class="menu_localiza"></div>
          <p class="texto_cardapio">

            Refrigerante | Sucos | Água | Água de côco | H2O | Energético
          </p>
        </div>
        <br/>

        <div class="titulos_cardapio">
          <div class="texto_titulos">Porções</div>
        </div>
        <div class="suporte_texto_cardapio">
          <p class="texto_cardapio">
            Batata | Calabresa | Contra Filé | Frango | Mandioca | Polenta | Salame

          </p>
        </div>
      </div>
      <div class="suporte_titulos">
        <div class="titulos">Aonde Estamos</div>
      </div>
      <div id="map"></div>
      <div class="localizacao">

        <p class="texto_localizacao">Rua General Bitencourt, 221 - Centro, Osasco - SP, Brasil</p>
      </div>


    </main>
    <?php require_once 'footer.php'; ?>

    <!-- Slider Principal -->
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }


    </script>
    <script>
      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
          x[myIndex-1].style.display = "block";
          setTimeout(carousel, 4000); // Change image every 2 seconds
      }
    </script>

    <!-- Slider ambiente -->
    <script>
      var myIndex = 0;
      carousel();

      function carousel() {
      var i;
      var x = document.getElementsByClassName("imagem_ambiente");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 3000); // Change image every 2 seconds
      }
    </script>

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
    <script>
      $(".item_menu a, .links a, .menu a").click(function(e) {

        e.preventDefault();

        var obj = "div." + $(this).attr("ref");

        $('html, body').animate({
            scrollTop: $(obj).offset().top
        }, 800);

      });
    </script>
  </body>
</html>

  <?php $path= "../" ?>
    <nav class="nav-desk">
      <div class="suporte_conteudo_nav">
        <div class="suporte_logo_buteco">
          <figure>
            <img src="../imagens/logo_retangular.png" alt="" class="logo_buteco">
          </figure>
        </div>
        <div class="suporte_item_menu">
          <div class="item_menu">
            <a href="dashboard.php">
              Home
            </a>
          </div>
          <div class="item_menu">
            <a href="#" ref="menu_ambiente">
              Ambiente
            </a>
          </div>
          <div class="item_menu">
            <a href="#" ref="cardapio_menu">
              Cardapio
            </a>
          </div>
          <div class="item_menu">
            <a href="eventos.php">
              Eventos
            </a>
          </div>
          <div class="item_menu">
            <a href="#" ref="menu_localiza">
              Localização
            </a>
          </div>
          <div class="item_menu">
            <a href="#" ref="caixas_text">
              Fale Conosco
            </a>
          </div>
        </div>
      </div>
    </nav>
    <div class="linha_invisivel_menu">

    </div>

    <div class="menu_mobile">

    <!--
        HOSPITAL -->
      <header>
            <a href="dashboard.php">
                 <div class="logo">
                      <img src="../imagens/logo_retangular.png" alt="" class="logo_retangular_responsivo">
                 </div>
            </a>
              <div class="logo_marca_responsivo">

            </div>
      	<!-- <span>Author : <a href="http://glennsmith.me" target="_blank">Glenn Smith</a></span> -->
        <button class="hamburger">&#9776;</button>
        <button class="cross">&#735;</button>
      </header>

      <div class="separador_responsivo">

      </div>
      <div class="menu">
        <ul>
          <a href="dashboard.php"><li>Home</li></a>
          <a href="#" ref="menu_ambiente"><li>Ambiente</li></a>
          <a href="#" ref="cardapio_menu"><li>Cardapio</li></a>
          <a href="eventos.php"><li>Eventos</li></a>
          <a href="#" ref="menu_localiza"><li>Localização</li></a>
          <a href="#" ref="caixas_text"><li>Fale Conosco</li></a>
        </ul>
      </div>
    </div>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
      $( document ).ready(function() {

      $( ".cross" ).hide();
      $( ".menu" ).hide();
      $( ".hamburger" ).click(function() {
      $( ".menu" ).slideToggle( "slow", function() {
      $( ".hamburger" ).hide();
      $( ".cross" ).show();
      });
      });

      $( ".cross" ).click(function() {
      $( ".menu" ).slideToggle( "slow", function() {
      $( ".cross" ).hide();
      $( ".hamburger" ).show();
      });
      });

      });
    </script>

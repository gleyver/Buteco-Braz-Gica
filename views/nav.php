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
            <a href="ambiente.php">
              Ambiente
            </a>
          </div>
          <div class="item_menu">
            <a href="cardapio.php">
              Cardapio
            </a>
          </div>
          <div class="item_menu">
            <a href="eventos.php">
              Eventos
            </a>
          </div>
          <div class="item_menu">
            <a href="localizacao.php">
              Localização
            </a>
          </div>
          <div class="item_menu">
            <a href="faleconosco.php">
              Fale Conosco
            </a>
          </div>
        </div>
      </div>
    </nav>

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
          <a href="ambiente.php"><li>Ambiente</li></a>
          <a href="cardapio.php"><li>Cardapio</li></a>
          <a href="eventos.php"><li>Eventos</li></a>
          <a href="localizacao.php"><li>Localização</li></a>
          <a href="faleconosco.php"><li>Fale Conosco</li></a>
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

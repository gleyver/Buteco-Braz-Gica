<?php $coluna =null; ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="../css/basePagina.css">
    <link rel="stylesheet" href="../css/style_cardapio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <?php require_once 'nav.php'; ?>
    <?php //require_once 'header.php' ?>
    <main>
      <div class="linha_invisivel"></div>
      <div class="suporte_titulos">
        <div class="titulos">Cardápio</div>
      </div>

      <div class="conteudo">
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
      </div>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
</html>

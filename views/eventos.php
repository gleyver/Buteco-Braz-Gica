<?php $coluna =null; ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="../css/basePagina.css">
    <link rel="stylesheet" href="../css/style_dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <?php require_once 'nav.php'; ?>
    <?php //require_once 'header.php' ?>
    <main>
      <div class="linha_invisivel"></div>
      <div class="suporte_titulos">
        <div class="titulos">Eventos</div>
      </div>

      <div class="conteudo">
        <div class="suporte_eventos">
          <div class="suporte_fotos">
            <a href="#"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
              <img src="../imagens/Aniversariante.jpg" alt="" class="imagem_eventos">
            </a>
          </div>

          <div class="suporte_fotos">
            <img src="../imagens/SEXTA_2206.jpg" alt="" class="imagem_eventos">
          </div>

          <div class="suporte_fotos">
            <img src="../imagens/SABADO_2306.jpg" alt="" class="imagem_eventos">
          </div>

          <div class="suporte_fotos">
            <a href="#"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
              <img src="../imagens/Aniversariante.jpg" alt="" class="imagem_eventos">
            </a>
          </div>

          <div class="suporte_fotos">
            <img src="../imagens/SEXTA_2206.jpg" alt="" class="imagem_eventos">
          </div>

          <div class="suporte_fotos">
            <img src="../imagens/SABADO_2306.jpg" alt="" class="imagem_eventos">
          </div>

        </div>
      </div>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
</html>

<?php $coluna =null; ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="../css/basePagina.css">
    <link rel="stylesheet" href="../css/style_fale_conosco.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    <?php require_once 'nav.php'; ?>
    <?php //require_once 'header.php' ?>
    <main>
      <div class="linha_invisivel"></div>
      <div class="suporte_titulos">
        <div class="titulos">Fale Conosco</div>
      </div>

      <div class="texto_antes_fale_conosco">
        Entre em contato conosco preenchendo o formulário abaixo.
      </div>

      <form class="" action="faleconosco.php" method="post">
        <div class="conteudo">
          <div class="suporte_fale_conos">
            <div class="titulos_fale_conosco">Nome</div>
            <input type="text" name="txt_nome" value="" placeholder="digite seu nome" class="input_fale">
          </div>

          <div class="suporte_fale_conos">
            <div class="titulos_fale_conosco">Email</div>
            <input type="text" name="txt_email" value="" placeholder="digite seu email" class="input_fale">
          </div>

          <div class="suporte_fale_conos">
            <div class="titulos_fale_conosco">Telefone para contato</div>
            <input type="text" name="txt_email" value="" placeholder="(11) 99999-4444" class="input_fale">
          </div>

          <div class="suporte_fale_conosco_mensagem">
            <div class="titulos_fale_conosco">Mensagem</div>
            <textarea name="txt_mensagem" rows="8" cols="70" class="txtarea"></textarea>
            <textarea name="txt_mensagem" rows="8" cols="40" class="txtarea2"></textarea>
          </div>

          <div class="suporte_botao">
            <input type="submit" name="txt_enviar" value="ENVIAR">
          </div>
        </div>

      </form>
    </main>
    <?php require_once 'footer.php'; ?>
    <script>
      $(window).bind("orientationchange", function(){
        var orientation = window.orientation;
        var new_orientation = (orientation) ? 0 : 180 + orientation;
        $('body').css({
            "-webkit-transform": "rotate(" + new_orientation + "deg)",           //Chrome
            "-moz-transform": "rotate(" + new_orientation + "deg)",              //Firefox
            "-o-transform": "rotate(" + new_orientation + "deg)",                //Opera
            "-ms-transform": "rotate(" + new_orientation + "deg)",               //IE's novos
            "transform": "rotate(" + new_orientation + "deg)",                   //nativa
            "filter": "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)" //IE's antigos
        });
      });
    </script>
  </body>
</html>

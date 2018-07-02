<?php $coluna =null; ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="../css/basePagina.css">
    <link rel="stylesheet" href="../css/style_dashboard.css">
    <link rel="stylesheet" href="../css/style_fale_conosco.css">
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
      <div class="texto_titulos">
        Entre em contato conosco preenchendo o formulário abaixo:
      </div>
      <div class="conteudo_formulario">

        <form class="" action="dashboard.php" method="post">
          <div class="caixas_text">
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
          </div>

          <div class="suporte_fale_conosco_mensagem">
            <div class="titulos_fale_conosco">Mensagem</div>
            <textarea name="txt_mensagem" rows="7" cols="35" class="txtarea"></textarea>
            <textarea name="txt_mensagem" rows="7" cols="35" class="txtarea2"></textarea>
          </div>
          <div class="suporte_botao">
            <input type="submit" name="txt_enviar" value="ENVIAR">
          </div>
          <div class="texto_whatssapp">
            <a href="https://api.whatsapp.com/send?phone=5511947926280&text=Ola%20Teste%20de%20Whatsapp">
              <span class="texto_whatssapp">Acesse pelo whatsapp</span>
            </a>
          </div>
        </div>
      </form>
      </div>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
</html>

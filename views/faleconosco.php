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
    <script type="text/javascript">

    	//pega a largura da resolução da tela
    	var width = screen.width;
    	//pega a altura da resolução da tela
    	var height = screen.height;
      var coluna = null;

    	//verifica se a resolução dará uma boa visão do site
    	if (width > 520){
        coluna = 70;
        <?php $coluna =70; ?>

    	}else if(width <= 520){

        coluna = 40;
        <?php $coluna =40; ?>
        }


    </script>
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
            <div class="titulos_fale_conosco">NOME</div>
            <input type="text" name="txt_nome" value="" placeholder="digite seu nome" class="input_fale">
          </div>

          <div class="suporte_fale_conos">
            <div class="titulos_fale_conosco">EMAIL</div>
            <input type="text" name="txt_email" value="" placeholder="digite seu email" class="input_fale">
          </div>

          <div class="suporte_fale_conos">
            <div class="titulos_fale_conosco">TELEFONE PARA CONTATO</div>
            <input type="text" name="txt_email" value="" placeholder="(11) 99999-4444" class="input_fale">
          </div>

          <div class="suporte_fale_conosco_mensagem">
            <div class="titulos_fale_conosco">MENSAGEM</div>
            <textarea name="txt_mensagem" rows="8" cols="<?php echo $coluna?>"></textarea>
          </div>

          <div class="suporte_botao">
            <input type="submit" name="txt_enviar" value="ENVIAR">
          </div>
        </div>

      </form>
    </main>
    <?php require_once 'footer.php'; ?>
  </body>
</html>

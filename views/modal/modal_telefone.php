<?php

//$action = "modo=inserir";

?>

<html>
    <head>
        <title>Modal</title>
        <link rel="stylesheet" type="text/css" href="css/style_modal_telefone.css">

        <script>
            $(document).ready(function(){/*fechar a modal*/
               $(".fechar").click(function(){
                  $(".container_modal").fadeOut();
               });
            });
        </script>
    </head>

    <body>
        <div class="main_modal"><!--main que segura tudo-->
            <div class="close_modal">
                <a href="#" class="fechar"><img src="imagens/close.png"></a>
            </div>

            <div class="content_modal">
                <form action="" method="post" id="form" data-id="<?php echo($id)?>" enctype="multipart/form-data">

                    <div class="content_logo"><!--content do logo e do titulo-->
                        <div class="logo">
                            <img src="../../imagens/logo_only_heart.png">
                        </div>
                        <div class="titulo">
                            <a>Cadastro de Aniversariante</a>
                        </div>
                    </div>

                        <div class="content_campos"><!--content dos campos de cadastro-->
                            <div class="campo"><!--campos-->
                                <div class="string_campo">
                                    <a>telefone:</a>
                                </div>

                                <div class="input_campo">
                                    <input type="text" value="" name="txt_sobre" >
                                </div>
                            </div>

                            <div class="campo_botao">
                                <div class="botao">
                                    <input id="bnt_cadastrar" type="submit" name="btn_cadastrar" value="Cadastrar">
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>

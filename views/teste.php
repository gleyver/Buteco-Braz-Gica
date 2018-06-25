<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/basePagina.css">
  </head>
  <body>
    <?php include_once 'nav.php'; ?>

    <img class="foto1" src="http://edsonemiliano.com.br/blog/demos/scrolar-ate-elemento/aston.jpg"> <br><br><br>
    <img class="foto2" src="http://edsonemiliano.com.br/blog/demos/scrolar-ate-elemento/ferrari.jpg"> <br><br><br>
    <img class="foto3" src="http://edsonemiliano.com.br/blog/demos/scrolar-ate-elemento/pagani.jpg"> <br><br><br>
    <img class="foto5" src="http://edsonemiliano.com.br/blog/demos/scrolar-ate-elemento/lambo.jpg"> <br><br><br>

    <div class="teste">
      oi
    </div>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script>
    $(".item_menu a").click(function(e) {

      e.preventDefault();

      var obj = "div." + $(this).attr("ref");

      $('html, body').animate({
          scrollTop: $(obj).offset().top
      }, 1200);

    });
    </script>
  </body>
</html>

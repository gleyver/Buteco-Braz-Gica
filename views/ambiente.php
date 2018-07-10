<?php  ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ambiente</title>
    <link rel="stylesheet" href="../css/basePagina.css">
    <link rel="stylesheet" href="../css/style_ambiente.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Flipping Circle Slideshow" />
    <meta name="keywords" content="flipping, circle, round, jquery plugin, circular, slideshow, 3d, css 3d transforms" />
    <meta name="author" content="Gleyver" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/default.css" />
    <link rel="stylesheet" type="text/css" href="../css/component.css" />
    <script src="../js/modernizr.custom.js"></script>
  </head>
  <body>
    <?php require_once 'nav.php'; ?>
    <?php //require_once 'header.php' ?>
    <div class="container">
			<!-- Codrops top bar -->

			<div class="main">
				<div id="fc-slideshow" class="fc-slideshow">
					<ul class="fc-slides">
						<li><img src="../imagens/ambiente_bar_1.jpg"/><h3>Hot</h3></li>
						<li><img src="../imagens/ambiente_bar_2.jpg"/><h3>Cold</h3></li>
						<li><img src="../imagens/ambiente_bar_3.jpg"/><h3>Light</h3></li>
						<li><img src="../imagens/ambiente_bar_4.jpg"/><h3>Dark</h3></li>
						<li><img src="../imagens/ambiente_bar_5.jpg"/><h3>Soft</h3></li>
						<li><img src="../imagens/ambiente_bar_6.jpg"/><h3>Hard</h3></li>
						<li><img src="../imagens/ambiente_bar_7.jpg"/><h3>Smooth</h3></li>
						<!-- <li><img src="../imagens/ambiente_bar_4.jpg"/><h3>Rough</h3></li> -->
					</ul>
				</div>
			</div>
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="../js/jquery.flipshow.js"></script>
		<script>
			$( function() {
				$( '#fc-slideshow' ).flipshow();
			} );
		</script>
    <?php require_once 'footer.php'; ?>
  </body>
</html>

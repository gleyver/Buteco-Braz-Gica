<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/basePagina.css">
    <link rel="stylesheet" href="../css/style_ambiente.css">
		<title>3D Gallery Room</title>
		<meta name="description" content="Add a description" />
		<meta name="keywords" content="Add keywords" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="../3DGalleryRoom/css/default.css" />
		<link rel="stylesheet" type="text/css" href="../3DGalleryRoom/css/component.css" />
		<script src="../3DGalleryRoom/js/modernizr.custom.js"></script>
	</head>
	<body>
    <?php require_once 'nav.php'; ?>
		<div class="container">

			<div class="main">
				<div id="gr-gallery" class="gr-gallery">
					<div class="gr-main">
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_1.jpg" alt="img01" />
							</div>
						</figure>
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_2.jpg" alt="img02" />
							</div>
						</figure>
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_3.jpg" alt="img03" />
							</div>
						</figure>
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_4.jpg" alt="img04" />
							</div>
						</figure>
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_5.jpg" alt="img01" />
							</div>
						</figure>
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_6.jpg" alt="img02" />
							</div>
						</figure>
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_7.jpg" alt="img03" />
							</div>
						</figure>
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_1.jpg" alt="img08" />
							</div>
						</figure>
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_2.jpg" alt="img09" />
							</div>
						</figure>
						<figure>
							<div>
								<img src="../imagens/ambiente_bar_3.jpg" alt="img10" />
							</div>
						</figure>
					</div>
				</div>
			</div>
		</div><!-- /container -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="../3DGalleryRoom/js/wallgallery.js"></script>
		<script>
			$(function() {

				Gallery.init( {
					layout : [3,2,3,2]
				} );

			});
		</script>
				  <?php require_once 'footer.php'; ?>
	</body>
</html>

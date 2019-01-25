<?php	include 'conexao.inc.php';  ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="IJEMAVI - Igreja de Jesus Manacial de Águas Vivas, ijemavi">
			<meta name="keywords" content="Igreja, Jesus, Manancial, Águas, Vivas, Pastor, Família, Adoradores, IJEMAVI, ijemavi">
			<meta name="author" content="José Ribeiro">
			<meta http-equiv="refresh" content="300">
			<title>IJEMAVI- Igreja de Jesus Manancial de Águas Vivas</title>
			<link href="css/bootstrap.css" rel="stylesheet">
      <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
      <!-- Galeria img index -->
      <link rel="stylesheet" href="css/gallery-grid-fonts" >
      <link rel="stylesheet" href="css/gallery-grid-baguetteBox.min.css">
      <link rel="stylesheet" href="css/gallery-grid.css">
      <!-- estilo normal -->
      <link rel="stylesheet" href="style.css" >
      </head>
    <body>
      <div class="bg_index">
        <!-- Menu -->
        <?php include 'menu_index.inc.php'; ?>

      <div class="banner">
        <!-- Banner Slides-->
        <?php include 'banner.inc.php'; ?>
      </div>
      <div class="container-fluid">
      <div class="devocional">
         <?php include 'devocional_index.php'; ?> 
      </div><br>
      <div class="img_galeria">
         <?php include 'galeria_img.php'; ?> 
      </div>
      </div>

      <footer>
        <?php include 'footer.inc.php'; ?>
      </footer>
      </div>
      <script>	$('[data-toggle="tooltip"]').tooltip();	</script> <!-- Tooltip  -->
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/bootstrap.banner.js"></script> <!-- funcionar menu -->
      <script src="js/popper.min.js" ></script> 	<!-- talvez nao precisa desta biblioteca -->
       <!-- Galeria img index -->
      <script src="js/gallery-grid-baguetteBox.min.js"></script>
      <script> baguetteBox.run('.tz-gallery'); </script>
    </body>
</html>

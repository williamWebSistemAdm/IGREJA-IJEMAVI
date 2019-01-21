<?php
	include 'conexao.inc.php' ;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="IJEMAVI - Igreja de Jesus Manacial de Águas Vivas, ijemavi">
		<meta name="keywords" content="Igreja, Jesus, Manancial, Águas, Vivas, Pastor, Família, Adoradores, IJEMAVI, ijemavi">
		<meta name="author" content="Igreja IJEMAVI">
		<meta http-equiv="refresh" content="300"> -->
		<title>Galeria de Imagens</title>
		<!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/style.css" >
		<link rel="stylesheet" href="style.css" > -->
    <!-- <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico"> -->

    <link rel="stylesheet" href="css/galeria_foto_baguetteBox.min.css">
    <link rel="stylesheet" href="css/galeria_foto_fluid-gallery.css">
    <link rel="stylesheet" href="css/galeria_foto_font.css">

	</head>
	<body>

    <!-- <div class="container-fluid">
			 Menu -->
			<!-- <?php
      // include 'includes/menu_adm.inc.php';
      ?> -->

			<!-- <div class="container"> --> -->

        <h1>Galeria de Imagens</h1>

        <div class="container gallery-container">
      <?php

      $sql_img = "SELECT * FROM galeria";
           $result_img = $conexao->query($sql_img);

           if($result_img->num_rows > 0){
            while($row = $result_img->fetch_assoc())
            {
              $id_img = $row['id_galeria'];
              $img = "img/img_galeria/"."foto".$id_img.".jpg";

              $id_img = $row['id_galeria'] ;
              $nome_img = $row['nome_img_gal'] ;
              $nome_escolhido = $row['nome_escolhido'] ;
              $autor = $row['postador_img'] ;
              $data = $row['data_post_img'] ;
  ?>

            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <a class="lightbox" href="img/img_galeria/<?php echo $img; ?>">
                          <img src="img/img_galeria/<?php echo  $img; ?>" alt="<?php echo $nome_escolhido; ?>">
                        </a>
                    </div>
                </div>
            </div>
            <?php }}
            // else {   ?>

            <!-- <div class="carousel-item"> -->
             <!-- nao mostra  <img src="img/img_galeria/foto.jpg" alt="<?php echo $row_foto['nome_escolhido']; ?>"> -->
            <!-- </div>  -->
             <?php
          //   }
          // }
       ?>


          <!-- <p class="page-description text-center">Layout fluido com efeito de sobreposição</p> -->
          <!-- <div class="tz-gallery">
              <div class="row">
                  <div class="col-sm-6 col-md-3">
                      <a class="lightbox" href="images/bridge.jpg">
                          <img src="images/bridge.jpg" alt="Bridge">
                      </a>
                  </div>
              </div>
          </div> -->
      </div>

      <!-- <div class="col-sm-6 col-md-3">
        <a class="lightbox" href="images/park.jpg">
          <img src="images/park.jpg" alt="Park">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a class="lightbox" href="images/tunnel.jpg">
          <img src="images/tunnel.jpg" alt="Tunnel">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a class="lightbox" href="images/traffic.jpg">
          <img src="images/traffic.jpg" alt="Traffic">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a class="lightbox" href="images/coast.jpg">
          <img src="images/coast.jpg" alt="Coast">
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a class="lightbox" href="images/rails.jpg">
          <img src="images/rails.jpg" alt="Rails">
        </a>
      </div> -->


		  <!-- </div> <!--  container --> -->
		<!-- </div> -->
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/Galeria_foto_baguetteBox.min.js"></script>
    <script>
    baguetteBox.run('.tz-gallery');
    </script>
  </body>

  </html>

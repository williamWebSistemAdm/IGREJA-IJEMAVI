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
			<link href="css/bootstrap.min.css" rel="stylesheet">
				<link href="css/bootstrap.css" rel="stylesheet"><!-- não Retirar esta linha aqui do bootstrap.css -->
        <link rel="stylesheet" href="style.css" >
				<link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
    </head>
    <body>
      <div class="bg_index">
				<!-- Menu -->
				<?php	include 'menu_index.inc.php'; ?>

      <div class="banner">
        <!-- Banner Slides-->
        <?php include 'banner.inc.php'; ?>
      </div>

      	<br><br><br><br><br><br><br><br>
      	<br><br><br><br><br><br><br><br>
      	<br><br><br><br><br><br><br><br>
      </div>
      <div id="rodape">
        <?php include 'footer.inc.php'; ?>
      </div>
      <script>	$('[data-toggle="tooltip"]').tooltip();	</script> <!-- Tooltip  -->
      <script src="js/jquery-3.3.1.slim.min.js"></script>
      <script src="js/bootstrap.banner.js"></script> <!-- funcionar menu -->
      <script src="js/popper.min.js" ></script> 	<!-- talvez nao precisa desta biblioteca -->

    </body>
</html>

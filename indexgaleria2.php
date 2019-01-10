<?php	include 'includes/conexao.inc.php';  ?>
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="style.css" >
    <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
	</head>

	<body>
		<div class="container-fluid">
			<!-- Menu -->
			<?php	include 'includes/menu_index.inc.php'; ?>

			<!-- Carroussel -->
			<?php	include 'carroussel_banner.inc.php'; ?>


			<!-- galeria foto -->
			 <?php
			// include 'galeria_foto.php'; ?>

		</div>

		<?php
			$result_foto = "SELECT img_galeria, nome_img_galeria FROM galeria ORDER BY id_galeria ASC";
			$resultado_foto = mysqli_query($conexao, $result_foto);
			if ($resultado_foto->num_rows > 0) {
				while($item = $resultado_foto->fetch_assoc()){
					echo '<div>';
					if($item['img_galeria']==''){
						echo '  <div>  <img src="img/no-image.jpg" alt="Sem Imagem"></div>  ';

					}else{
						echo '  <div><a href="img/img_galeria/' . $item['img_galeria'] . '"> <img src=img/img_galeria/'.$item['img_galeria'].' alt="Imagem galeria"></a></div>';
					}
					echo '</div>';
				}
			}else {
				echo 'Nenhuma imagem encontrada. <br />';
			}

		 ?>




		<script src="js\jquery-3.3.1.slim.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>

</html>
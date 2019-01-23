<?php	include 'conexao.inc.php'; 
	$id_dev_get = $_GET['id_devocional']
 ?>
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
		<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
		<link href="css/bootstrap.css" rel="stylesheet"><!-- não Retirar esta linha aqui do bootstrap.css -->
        <link rel="stylesheet" href="style.css" >
		<link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
    </head>
    <body>
      <div class="bg_index">
		<!-- Menu -->
		<?php	include 'menu_index.inc.php'; ?>
		<?php
		 $sql_dev = "SELECT * FROM devocional where id_devocional= '$id_dev_get'";
		 $result_dev = $conexao->query($sql_dev);

		 if($result_dev->num_rows > 0){
			while($row = $result_dev->fetch_assoc())
			{
				$id_dev = $row['id_devocional'];
				// $img = "img/img_banner/"."banner".$id_dev.".jpg";
				$img = "img/img_devocional/"."Devocional".$id_dev.".jpg";

				$titulo = $row['titulo_dev'] ;
				$resumo = $row['resumo_dev'] ;
				$texto = $row['texto_dev'] ;
				$autor = $row['autor_dev'] ;
				$data = $row['data_dev'] ;
				$foto = $row['foto_dev'] ;
		?>
		<div class="container">
  		<div class="dev_justificado">
		<h3 class="text-center col-md-12">Devocional</h3>
	    		<h4 class="card-title"> <?php  echo  $titulo . "<br>" ; ?></h4>
		  	<div class="text-center col-md-12 img_dev_width">
				<img  src="<?php echo $img; ?> " alt="<?php echo $titulo; ?>" title="<?php echo $titulo; ?>"><br><br>
			</div>
		    	<p><?php  echo  $texto; ?></p>
            	<small id="data_dev"  class="card-text"><em>Postado em: <?php  echo  $data; ?></em></small><br>
            	<small id="data_dev"  class="card-text text-left"><em>Por: <?php  echo  $autor; ?></em></small>
  	    </div>

		<?php	}}	?>

      <footer>
        <?php include 'footer.inc.php'; ?>
      </footer>
	</div>
	<script src="js/jquery-3.3.1.slim.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
</body>

</html>
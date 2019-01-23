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
			<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
				<link href="css/bootstrap.css" rel="stylesheet"><!-- não Retirar esta linha aqui do bootstrap.css -->
        <link rel="stylesheet" href="style.css" >
				<link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
    </head>
    <body>
      <div class="bg_index">
				<!-- Menu -->
				<?php	include 'menu_index.inc.php'; ?>

		<h3 class="titulo_dev text-center col-md-12 table-active">Devocional</h3>
		<div class="container container-dev">

	      <div class="row">
					<?php

					 $sql_dev = "SELECT * FROM devocional";
					 $result_dev = $conexao->query($sql_dev);

					 if($result_dev->num_rows > 0){
						while($row = $result_dev->fetch_assoc())
						{
							$id_dev = $row['id_devocional'];
							// $img = "img/img_banner/"."banner".$id_dev.".jpg";
							$img = "img/img_devocional/"."Devocional".$id_dev.".jpg";

							// echo  $row['id_devocional'] ;
							$titulo = $row['titulo_dev'] ;
							$resumo = $row['resumo_dev'] ;
							$texto = $row['texto_dev'] ;
							$autor = $row['autor_dev'] ;
							$data = $row['data_dev'] ;
							$foto = $row['foto_dev'] ;


						?>
	        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3   ">
	          <div id="devocional" class="card shadow-sm devocional">
				<div class="card-text text-center" id="img_dev">
					<a href="devocional_view.php?id_devocional=<?php echo $id_dev; ?>" ><img  src="<?php echo $img; ?> " alt="<?php echo $titulo; ?>" title="<?php echo $titulo; ?>"></a>
				</div>
	            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg> -->
                <div class="btn-group text-right">
                  <a href="devocional_view.php?id_devocional=<?php echo $id_dev; ?>" ><button type="button" class="btn btn-sm btn-outline-secondary">Mais</button></a>
                </div>
	            <div class="card-body">
	              <p id="titulo_dev" class="card-text text-center"> <?php  echo  $titulo . "<br>" ; ?></p>
	              <p id="resumo_dev" class="card-text"> <?php  echo  $resumo; ?></p>
	              <div class="d-flex justify-content-between align-items-center">
	                <small id="data_dev"  class="card-text"><em> <?php  echo  $data; ?></em></small>
	              </div>
	            </div>
	          </div>
	        </div>
	<?php	}}	?>


	      </div>
	    </div>

      <footer>
        <?php include 'footer.inc.php'; ?>
      </footer>
		</div>
	<script src="js/jquery-3.3.1.slim.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
</body>

</html>
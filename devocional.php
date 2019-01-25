<?php	include 'conexao.inc.php';  ?>

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
		}}
	?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="Com o Devocional Diário Você pode estreitar seu relacionamento com o Senhor. Deus se revelará através da Sua Palavra, por isso leia e ore. Veja o que Deus tem para você hoje">
			<meta name="keywords" content="Igreja, Jesus, Manancial, Águas, Vivas, Pastor, Família, Adoradores, IJEMAVI, ijemavi">
			<meta name="author" content="José Ribeiro">
			<meta http-equiv="refresh" content="700">
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


	<!-- Compartilhar nasredes Sociais -->
	<div class="text-right redes_sociais">

			<!-- Whatsapp -->
			 <a href="http://api.whatsapp.com/send?text=Devocionais Igreja IJEMAVI%20Site:%20&u=http://igrejaijemavi.com.br/devocional.php
				 "><img  src="img/whatsapp1.png" alt="Compartilhar página no Whatsapp" title="Compartilhar página no Whatsapp"></a>
		
			<!-- facebook -->
			<a href="https://www.facebook.com/sharer/sharer.php?text=Devocionais Igreja IJEMAVI%20Site:%20&u=http://igrejaijemavi.com.br/devocional.php" class="cShareLink cShareLink_facebook" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Compartilhar página no Facebook">
				<img  src="img/facebook_3.png" alt="Compartilhar página no facebook" title="Compartilhar página no facebook">
			</a>
			<!-- twitter -->
			<a href="http://twitter.com/share?text=Devocionais Igreja IJEMAVI%20Site:%20&amp;url=http://igrejaijemavi.com.br/devocional.php" class="cShareLink cShareLink_twitter" target="_blank" data-role="shareLink" title="Compartilhar Devocional no Twitter" data-ipstooltip="" rel="noopener">
				<img  src="img/twitter.png" alt="Compartilhar página no Twitter" title="Compartilhar página no Twitter">
			</a>
			<!-- linkedin -->
			<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://igrejaijemavi.com.br/devocional.php&amp;title=Devocionais Igreja IJEMAVI" class="cShareLink cShareLink_linkedin" target="_blank" data-role="shareLink" title="Compartilhar página no LinkedIn" data-ipstooltip="" rel="noopener">
				<img  src="img/linkedin.png" alt="Compartilhar página no LinkedIn" title="Compartilhar página no LinkedIn">
			</a>

			<!-- google + -->
			<a href="https://plus.google.com/share?url=http://igrejaijemavi.com.br/devocional.php" class="cShareLink cShareLink_google" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Compartilhar Devocional no Google+">
				<img  src="img/google+.png" alt="Compartilhar página no Google+" title="Compartilhar página no Google+">
			</a>
			<!-- pinterest -->
			<a href="http://pinterest.com/pin/create/button/?url=http://igrejaijemavi.com.br/devocional.php&amp;media=http://igrejaijemavi.com.br/devocional.php" class="cShareLink cShareLink_pinterest" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Share on Pinterest">
				<img  src="img/pinterest.png" alt="Compartilhar página no Pinterest" title="Compartilhar página no Pinterest">
			</a>
		</div><br>


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
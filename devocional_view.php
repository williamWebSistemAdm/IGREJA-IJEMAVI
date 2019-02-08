<?php	include 'conexao.inc.php'; 
	$id_dev_get = $_GET['id_devocional']
 ?>

<?php
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
	$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
	$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
	$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
	$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
	$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
			}}
		?>
		<meta name="description" content="<?php echo  $titulo;?> Com este devocional Você pode estreitar seu relacionamento com o Senhor. Deus se revelará através da Sua Palavra, por isso leia e ore. Veja o que Deus tem para você hoje">
		<meta name="keywords" content="Igreja, Jesus, Manancial, Águas, Vivas, Pastor, Família, Adoradores, IJEMAVI, ijemavi">
		<meta name="author" content="José Ribeiro">
		<meta http-equiv="refresh" content="700">
		<title>IJEMAVI- Igreja de Jesus Manancial de Águas Vivas</title>
		<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
		<link href="css/bootstrap.css" rel="stylesheet"><!-- não Retirar esta linha aqui do bootstrap.css -->
        <link rel="stylesheet" href="style.css" >
		<link rel="shortcut icon" type="image/png" href="img/logo1.png">
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
		<h3 class="titulo_dev text-center col-md-12">Devocional</h3>

		<!-- Compartilhar nasredes Sociais -->
	<div class="text-right redes_sociais">

		<?php
		if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true): /*Se este dispositivo for portátil, faça/escreva o seguinte */ ?>
			 <a href="http://api.whatsapp.com/send?text=Devocional:%20<?php echo $titulo; ?>%20Site:%20http://igrejaijemavi.com.br/devocional_view.php?id_devocional=<?php echo $id_dev; ?>
				 " target="_blank" ><img  src="img/whatsapp1.png" alt="Compartilhar Devocional <?php echo $titulo; ?> no Whatsapp" title="Compartilhar Devocional <?php echo $titulo; ?> no Whatsapp"></a>
		<?php else : /* Caso contrário, faça/escreva o seguinte */ ?>
			<a href="http://api.whatsapp.com/send?text=Devocional:%20<?php echo $titulo; ?>%20Site:%20http://igrejaijemavi.com.br/devocional_view.php"><img  src="img/whatsapp1.png" alt="Compartilhar no Whatsapp" title="Compartilhar Devocional <?php echo $titulo; ?> no Whatsapp" target="_blank" ></a>
		<?php endif; ?>



			<!-- facebook -->
			<a href="https://www.facebook.com/sharer/sharer.php?text=Devocional:%20<?php echo $titulo; ?>%20Site:%20&u=http://igrejaijemavi.com.br/devocional_view.php?id_devocional=<?php echo $id_dev; ?>" class="cShareLink cShareLink_facebook" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Compartilhar Devocional <?php echo $titulo; ?> no Facebook">
				<img  src="img/facebook_3.png" alt="Compartilhar Devocional <?php echo $titulo; ?> no facebook" title="Compartilhar Devocional <?php echo $titulo; ?> no facebook">
			</a>
			<!-- twitter -->
			<a href="http://twitter.com/share?text=Devocional:%20<?php echo $titulo; ?>%20Site:%20&amp;url=http://igrejaijemavi.com.br/devocional_view.php?id_devocional=<?php echo $id_dev; ?>" class="cShareLink cShareLink_twitter" target="_blank" data-role="shareLink" title="Compartilhar Devocional <?php echo $titulo; ?> no Twitter" data-ipstooltip="" rel="noopener">
				<img  src="img/twitter.png" alt="Compartilhar Devocional <?php echo $titulo; ?> no Twitter" title="Compartilhar Devocional <?php echo $titulo; ?> no Twitter">
			</a>
			<!-- linkedin -->
			<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://igrejaijemavi.com.br/devocional_view.php?id_devocional=<?php echo $id_dev; ?>&amp;title=Devocional+<?php echo $titulo; ?>+Igreja+IJEMAVI" class="cShareLink cShareLink_linkedin" target="_blank" data-role="shareLink" title="Compartilhar Devocional <?php echo $titulo; ?> no LinkedIn" data-ipstooltip="" rel="noopener">
				<img  src="img/linkedin.png" alt="Compartilhar Devocional <?php echo $titulo; ?> no LinkedIn" title="Compartilhar Devocional <?php echo $titulo; ?> no LinkedIn">
			</a>

			<!-- google + -->
			<a href="https://plus.google.com/share?url=http://igrejaijemavi.com.br/devocional_view.php?id_devocional=<?php echo $id_dev; ?>" class="cShareLink cShareLink_google" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Compartilhar Devocional <?php echo $titulo; ?> no Google+">
				<img  src="img/google+.png" alt="Compartilhar Devocional <?php echo $titulo; ?> no Google+" title="Compartilhar Devocional <?php echo $titulo; ?> no Google+">
			</a>
			<!-- pinterest -->
			<a href="http://pinterest.com/pin/create/button/?url=http://igrejaijemavi.com.br/devocional_view.php?id_devocional=<?php echo $id_dev; ?>&amp;media=http://igrejaijemavi.com.br/devocional_view.php?id_devocional=<?php echo $id_dev; ?>" class="cShareLink cShareLink_pinterest" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Share on Pinterest">
				<img  src="img/pinterest.png" alt="Compartilhar Devocional <?php echo $titulo; ?> no Pinterest" title="Compartilhar Devocional <?php echo $titulo; ?> no Pinterest">
			</a>
		</div>

			<!-- Compartilhar via e-mail -->
<!-- 			<a href="http://igrejaijemavi.com.br/devocional_view.php?id_devocional=<?php echo $id_dev; ?>" rel="nofollow" class="cShareLink cShareLink_email" data-ipsdialog="" data-ipsdialog-title="Enviar Devocional <?php echo $titulo; ?> por e-mail" data-ipsdialog-remotesubmit="" data-ipsdialog-flashmessage="O e-mail foi enviado" data-ipstooltip="" _title="Compartilhar Devocional <?php echo $titulo; ?> via e-mail">
				<img  src="img/email.png" alt="Enviar Devocional <?php echo $titulo; ?> via e-mail" title="Enviar Devocional <?php echo $titulo; ?> via e-mail">
			</a> -->


			<script type="text/template" class="blogger_addtoany_html"></script>
			<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
			    <a class="a2a_button_print"></a>
			    <a class="a2a_button_twitter"></a>
			    <a class="a2a_button_google_plus"></a>
			    <a class="a2a_button_facebook"></a>
			    <a class="a2a_button_facebook_messenger"></a>
			    <a class="a2a_button_whatsapp"></a>
			</div>
			
			<script async src="https://static.addtoany.com/js/blogger.js"></script>


	    		<h4 class="card-title text-center"> <?php  echo  $titulo . "<br>" ; ?></h4>
		  	<div class="text-center col-md-12 img_dev_width">
				<img  src="<?php echo $img; ?> " alt="<?php echo $titulo; ?>" title="<?php echo $titulo; ?>"><br><br>
			</div>
		    	<p class="texto_dev"><?php  echo  $texto; ?></p>
            	<small id="data_dev"  class="card-text"><em>Postado em: <?php  echo  $data; ?></em></small><br>
            	<small id="data_dev"  class="card-text text-left"><em>Por: <?php  echo  $autor; ?></em></small>
  	    </div>

		<?php	}}	?>

	</div>
      <footer>
        <?php include 'footer.inc.php'; ?>
      </footer>
	<script src="js/jquery-3.3.1.slim.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
</body>

</html>
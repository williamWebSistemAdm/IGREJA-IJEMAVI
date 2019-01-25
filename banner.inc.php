<?php
	include 'conexao.inc.php';
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

<div class="container-fluid">
	
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php
				$controle_ativo = 2;
				$controle_num_slide = 1;
				$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
				$resultado_carousel = mysqli_query($conexao, $result_carousel);
				while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
					if($controle_ativo == 2){ ?>
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li><?php
						$controle_ativo = 1;
					}else{ ?>
						<li data-target="#carousel-example-generic" data-slide-to="<?php echo $controle_num_slide; ?>"></li><?php
						$controle_num_slide++;
					}
				}
			?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
<?php

	// Pegar o maior id do Banner
	// $pegar_id__carrouses = "SELECT max(id) FROM carrouses";
	// $result_carrouses =  mysqli_query($conexao, $pegar_id__carrouses);
	//  while($row = mysqli_fetch_row($result_carrouses))
	//  {
	// 	 $max_id	= $row[0];
	//  }

	$controle_ativo = 2;
	$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
	$resultado_carousel = mysqli_query($conexao, $result_carousel);
	while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){

		$id = $row_carousel['id'];
		$img_carousel = $row_carousel['imagen_carousel'];
		$img_banner = $row_carousel['imagen_carousel'];
		// $rand =  rand(1, $max_id);
		// echo $rand;
		// echo $id;

		$img = "img/img_banner/"."banner".$id.".jpg";

		if($controle_ativo == 2){ ?>
			<div class="item active">
				<img src="<?php echo $img; ?>" alt="<?php echo $row_carousel['nome']; ?>" title="<?php echo $img_banner; ?>">


		<!-- Compartilhar nasredes Sociais -->
		<div class=" text-right redes_sociais_banner">

		<?php
		if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true): /*Se este dispositivo for portátil, faça/escreva o seguinte */ ?>
			 <a href="http://api.whatsapp.com/send?text=Banner:%20<?php echo $img_carousel; ?>%20Site:%20http://igrejaijemavi.com.br?<?php echo $img; ?>
				 " target="_blank" ><img  src="img/whatsapp1.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no Whatsapp" title="Compartilhar Banner <?php echo $img_carousel; ?> no Whatsapp"></a>
		<?php else : /* Caso contrário, faça/escreva o seguinte */ ?>
			<a href="http://api.whatsapp.com/send?text=Banner:%20<?php echo $img_carousel; ?>%20Site:%20http://igrejaijemavi.com.br?<?php echo $img; ?>"><img  src="img/whatsapp1.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no Whatsapp" title="Compartilhar Banner <?php echo $img_carousel; ?> no Whatsapp" target="_blank" ></a>
		<?php endif; ?>


			<!-- facebook -->
			<a href="https://www.facebook.com/sharer/sharer.php?text=Banner:%20<?php echo $img_carousel; ?>%20Site:%20http://igrejaijemavi.com.br?<?php echo $img; ?>" class="cShareLink cShareLink_facebook" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Compartilhar Banner <?php echo $img_carousel; ?> no Facebook">
				<img  src="img/facebook_3.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no facebook" title="Compartilhar Banner <?php echo $img_carousel; ?> no facebook">
			</a>
			<!-- twitter -->
			<a href="http://twitter.com/share?text=Banner:%20<?php echo $img_carousel; ?>%20Site:%20&amp;url=http://igrejaijemavi.com.br?<?php echo $img; ?>" class="cShareLink cShareLink_twitter" target="_blank" data-role="shareLink" title="Compartilhar Banner <?php echo $img_carousel; ?> no Twitter" data-ipstooltip="" rel="noopener">
				<img  src="img/twitter.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no Twitter" title="Compartilhar Banner <?php echo $img_carousel; ?> no Twitter">
			</a>
			<!-- linkedin -->
			<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://igrejaijemavi.com.br?<?php echo $img; ?>&amp;title=Banner+<?php echo $img_carousel; ?>+Igreja+IJEMAVI" class="cShareLink cShareLink_linkedin" target="_blank" data-role="shareLink" title="Compartilhar Banner <?php echo $img_carousel; ?> no LinkedIn" data-ipstooltip="" rel="noopener">
				<img  src="img/linkedin.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no LinkedIn" title="Compartilhar Banner <?php echo $img_carousel; ?> no LinkedIn">
			</a>
		</div>

			</div><?php
			$controle_ativo = 1;
		}else{ ?>
			<div class="item">
				<img src="<?php echo $img; ?>" alt="<?php echo $row_carousel['nome']; ?>" title="<?php echo $img_banner; ?>">


		<!-- Compartilhar nasredes Sociais -->
	<div class=" text-right redes_sociais_banner">

		<?php
		if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true): /*Se este dispositivo for portátil, faça/escreva o seguinte */ ?>
			 <a href="http://api.whatsapp.com/send?text=Banner:%20<?php echo $img_carousel; ?>%20Site:%20http://igrejaijemavi.com.br?<?php echo $img; ?>
				 " target="_blank" ><img  src="img/whatsapp1.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no Whatsapp" title="Compartilhar Banner <?php echo $img_carousel; ?> no Whatsapp"></a>
		<?php else : /* Caso contrário, faça/escreva o seguinte */ ?>
			<a href="http://api.whatsapp.com/send?text=Banner:%20<?php echo $img_carousel; ?>%20Site:%20http://igrejaijemavi.com.br?<?php echo $img; ?>"><img  src="img/whatsapp1.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no Whatsapp" title="Compartilhar Banner <?php echo $img_carousel; ?> no Whatsapp" target="_blank" ></a>
		<?php endif; ?>


			<!-- facebook -->
			<a href="https://www.facebook.com/sharer/sharer.php?text=Banner:%20<?php echo $img_carousel; ?>%20Site:%20http://igrejaijemavi.com.br?<?php echo $img; ?>" class="cShareLink cShareLink_facebook" target="_blank" data-role="shareLink" data-ipstooltip="" rel="noopener" _title="Compartilhar Banner <?php echo $img_carousel; ?> no Facebook">
				<img  src="img/facebook_3.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no facebook" title="Compartilhar Banner <?php echo $img_carousel; ?> no facebook">
			</a>
			<!-- twitter -->
			<a href="http://twitter.com/share?text=Banner:%20<?php echo $img_carousel; ?>%20Site:%20&amp;url=http://igrejaijemavi.com.br?<?php echo $img; ?>" class="cShareLink cShareLink_twitter" target="_blank" data-role="shareLink" title="Compartilhar Banner <?php echo $img_carousel; ?> no Twitter" data-ipstooltip="" rel="noopener">
				<img  src="img/twitter.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no Twitter" title="Compartilhar Banner <?php echo $img_carousel; ?> no Twitter">
			</a>
			<!-- linkedin -->
			<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://igrejaijemavi.com.br?<?php echo $img; ?>&amp;title=Banner+<?php echo $img_carousel; ?>+Igreja+IJEMAVI" class="cShareLink cShareLink_linkedin" target="_blank" data-role="shareLink" title="Compartilhar Banner <?php echo $img_carousel; ?> no LinkedIn" data-ipstooltip="" rel="noopener">
				<img  src="img/linkedin.png" alt="Compartilhar Banner <?php echo $img_carousel; ?> no LinkedIn" title="Compartilhar Banner <?php echo $img_carousel; ?> no LinkedIn">
			</a>
		</div>

			</div> <?php
		}
	}
?>
		</div>


		<!-- Controls -->
		<a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Voltar</span>
		</a>
		<a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Avançar</span>
		</a>
	</div>
	</div>


<hr>
<a href="https://www.facebook.com/sharer/sharer.php?text=Banner:%20<?php echo $img_carousel; ?>%20Site:%20http://igrejaijemavi.com.br?<?php echo $img; ?>" onclick="open('http://www.linkedin.com/shareArticle?mini=true','http://igrejaijemavi.com.br?<?php echo $img; ?>','status=no,Width=320,Height=285');">Abrir nova pagina</a>

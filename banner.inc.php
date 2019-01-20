<?php
	include 'conexao.inc.php';

 ?>

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
		$img_banner = $row_carousel['imagen_carousel'];
		// $rand =  rand(1, $max_id);
		// echo $rand;
		// echo $id;

		$img = "img/img_banner/"."banner".$id.".jpg";

		if($controle_ativo == 2){ ?>
			<div class="item active">
				<img src="<?php echo $img; ?>" alt="<?php echo $row_carousel['nome']; ?>" title="<?php echo $img_banner; ?>">
			</div><?php
			$controle_ativo = 1;
		}else{ ?>
			<div class="item">
				<img src="<?php echo $img; ?>" alt="<?php echo $row_carousel['nome']; ?>" title="<?php echo $img_banner; ?>">
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


<hr>

<!-- este carroussel etá dentro de header.inc.php -->
<div class="carroussel">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php
				$controle_ativo = 2;
				$controle_num_slide = 1;
				$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
				$resultado_carousel = mysqli_query($conexao, $result_carousel);
				while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
					if($controle_ativo == 2){ ?>
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php
						$controle_ativo = 1;
					}else{ ?>
						<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $controle_num_slide; ?>"></li><?php
						$controle_num_slide++;
					}
				}
			?>
			<!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
		</ol>
		<div class="carousel-inner">
			<?php
				$controle_ativo = 2;
				$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
				$resultado_carousel = mysqli_query($conexao, $result_carousel);
				while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
					if($controle_ativo == 2){  ?>
						<div class="carousel-item active">
							<img src="carroussel/imagens/<?php echo $row_carousel['imagen_carousel']; ?>" class="d-block w-100" alt="<?php echo $row_carousel['nome']; ?>">
						</div> <?php
						$controle_ativo = 1;
					}else {   ?>
						<div class="carousel-item">
							<img src="carroussel/imagens/<?php echo $row_carousel['imagen_carousel']; ?>" class="d-block w-100" alt="<?php echo $row_carousel['nome']; ?>">
						</div>  <?php
						}
					}
						?>

		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<!-- <span class="sr-only">Anterior</span> -->
	</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<!-- <span class="sr-only">Próximo</span> -->
	</a>
	</div>
</div>

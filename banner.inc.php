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
				$controle_ativo = 2;
				$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
				$resultado_carousel = mysqli_query($conexao, $result_carousel);
				while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
					if($controle_ativo == 2){ ?>
						<div class="item active">
							<img src="img/img_banner/<?php echo $row_carousel['imagen_carousel']; ?>" alt="<?php echo $row_carousel['nome']; ?>">
						</div><?php
						$controle_ativo = 1;
					}else{ ?>
						<div class="item">
							<img src="img/img_banner/<?php echo $row_carousel['imagen_carousel']; ?>" alt="<?php echo $row_carousel['nome']; ?>">
						</div> <?php
					}
				}
			?>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
<hr>

          <div class="row">
            <div class="col-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                  <img src="img/img_banner/<?php echo $row_carousel['imagen_carousel']; ?>" alt="<?php echo $row_carousel['nome']; ?>" title="<?php echo $row_carousel['nome']; ?>">
                    <img class="d-block w-100" src="img/baner1.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                  <img src="img/img_banner/<?php echo $row_carousel['imagen_carousel']; ?>" alt="<?php echo $row_carousel['nome']; ?>" title="<?php echo $row_carousel['nome']; ?>">
                    <img class="d-block w-100" src="img/baner2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                  <img src="img/img_banner/<?php echo $row_carousel['imagen_carousel']; ?>" alt="<?php echo $row_carousel['nome']; ?>" title="<?php echo $row_carousel['nome']; ?>">
                    <img class="d-block w-100" src="img/baner1.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>

      
      <script>
   
</script>
﻿<?php
				$controle_ativo = 2;
				$controle_num_slide = 1;
				$result_carousel = "SELECT * FROM carrouses ORDER BY id ASC";
				$resultado_carousel = mysqli_query($conexao, $result_carousel);
				while($row_carousel = mysqli_fetch_assoc($resultado_carousel)){
			
				}
			?>
<div class="container text-center"><hr>
<!-- <h3 id="galeria" class="text-center"> Galeria de Imagens</h3> --> 
 <!-- <div  id="tamanho"  class="container gallery-container text-center"> -->
    <!-- <div class="tz-gallery"> -->
        <div class="row">
        <!-- <div  > -->
        <div class=" container img_pd_dev ">
			<?php

			$sql_img = "SELECT * FROM dev_img_padrao";
			$result_img = $conexao->query($sql_img);
			while($row = $result_img->fetch_assoc())
			{
				$id_img = $row['id_img_padrao'];
				$nome_img = $row['nome_img_padrao'];
				$img = "img/img_dev_padrao/"."img_dev_padrao".$id_img.".jpg";

				echo '<div>';

				echo '	<input type="radio" name="foto_dev" value="'.$nome_img.'" required>	'; 
				echo '<img src="'.$img.'"  alt="'.$nome_img.'" >';

				echo '</div><br>';

				}	?>
		</div>
		</div>
		</div>
	<!-- </div> -->
<!-- </div> -->
<!-- </div> -->
       <!-- Galeria img index -->
 <!--      <script src="js/gallery-grid-baguetteBox.min.js"></script>
      <script> baguetteBox.run('.tz-gallery'); </script> -->
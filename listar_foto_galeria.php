	<div class="text-center"><h3>Lista de fotos</h3></div><br>
	 <div class="table-responsive">
  	<table class="table table-striped table-sm table-dark table-hover">
  		<tr class="bg-primary">
				<th>Nome</th>
				<th>postador</th>
        <th>Data da postagem</th>
  			<!-- <th>Nome imagem</th> -->
  			<!-- <th>Postador</th> -->
  		</tr>
  		<?php

  		 $sql_gal = "SELECT * FROM galeria";
  		 $result_gal = $conexao->query($sql_gal);

  		 if($result_gal->num_rows > 0){
  			while($row = $result_gal->fetch_assoc())
  			{
  				echo "<tr>";

          echo "<td>" . $row['img_galeria'] . "</td>";
          echo "<td>" . $row['postador_img'] . "</td>";
  				echo "<td>" . $row['data_post_img'] . "</td>";

  				 echo "</tr>";
  			 }
  		 }
  		 else{
  			 echo "<tr>";

  			 echo "<td>" . "Sem Dados" . "</td>";
  			 echo "<td>" . "Sem Dados" . "</td>";
  			 echo "<td>" . "Sem Dados" . "</td>";

  				echo "</tr>";

  		 }

  	 ?>
  	</table>

  </div>

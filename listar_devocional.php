
<div class="container">
	<h2>Lista de Devocional</h2>
	 <div class="table-responsive">
  	<table class="table table-striped table-sm table-dark table-hover">
  		<tr class="bg-primary">
				<th>Titulo</th>
				<th>Autor</th>
        <th>Data postagem</th>
  			<!-- <th> imagem</th> -->
  			<!-- <th>Postador</th> -->
  		</tr>
  		<?php

  		 $sql_dev = "SELECT * FROM devocional";
  		 $result_dev = $conexao->query($sql_dev);

  		 if($result_dev->num_rows > 0){
  			while($row = $result_dev->fetch_assoc())
  			{
  				echo "<tr>";

          echo "<td>" . $row['titulo_dev'] . "</td>";
          echo "<td>" . $row['autor_dev'] . "</td>";
  				echo "<td>" . $row['data_dev'] . "</td>";
  				// echo "<td>" . $row['foto_dev'] . "</td>";

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
</div>

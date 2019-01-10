
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
					$id_dev = $row['id_devocional'];
  				echo "<tr>";

          echo "<td>" . $row['titulo_dev'] . "</td>";
          echo "<td>" . $row['autor_dev'] . "</td>";
  				echo "<td>" . $row['data_dev'] . "</td>";
  				// echo "<td>" . $row['foto_dev'] . "</td>";
					?>

					<td>
					<div class="text-center">
						<!-- <a href="administrativo.php?link=6&id_obreiros=<?php echo $id_dev; ?>" ><button type="button" class="btn btn-sm btn-info">Visualizar</button></a> -->
						<a href="administrativo.php?link=8&id_devocional=<?php echo $id_dev; ?>" ><button type="button" class="btn btn-sm btn-warning"> Editar </button></a>
						<a href="administrativo.php?link=9&id_devocional=<?php echo $id_dev; ?>" ><button type="button" class="btn btn-sm btn-danger">Excluir</button></a>
					</div>
					</td>

					<?php
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

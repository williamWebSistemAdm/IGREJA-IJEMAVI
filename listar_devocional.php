<?php include 'seguranca.inc.php';//seguranca ?>
<br>
	<div class="text-center"><h3>Lista de Devocional</h3></div>
	<div class="text-right">
		<a href="administrativo.php?link=7" ><button type="button" class="btn btn-sm btn-success">Novo</button></a>
	</div>

	<h2></h2>
	 <div class="table-responsive">
  	<table class="table table-striped table-sm table-dark table-hover">
  		<tr class="bg-primary">
				<th>Id</th>
				<th>Titulo</th>
				<th>Autor</th>
        <th>Data postagem</th>
        <th>Ações</th>
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

          echo "<td>" . $row['id_devocional'] . "</td>";
          echo "<td>" . $row['titulo_dev'] . "</td>";
          echo "<td>" . $row['autor_dev'] . "</td>";
  				echo "<td>" . $row['data_dev'] . "</td>";
  				// echo "<td>" . $row['foto_dev'] . "</td>";
					?>

					<td>
					<div class="text-center">
						<a href="administrativo.php?link=22&id_devocional=<?php echo $id_dev; ?>" ><button type="button" class="btn btn-sm btn-info">Visualizar</button></a>
						<?php if (($id_dev !=1) and ($id_dev !=2)): ?>
						<a href="administrativo.php?link=8&id_devocional=<?php echo $id_dev; ?>" ><button type="button" class="btn btn-sm btn-warning"> Editar </button></a>
						<a href="prm_apag_devocional.php?id_devocional=<?php echo $id_dev; ?>" ><button type="button" class="btn btn-sm btn-danger">Excluir</button></a>
						<?php endif; ?>
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
  </div><br><br><br><br><br><br><br>

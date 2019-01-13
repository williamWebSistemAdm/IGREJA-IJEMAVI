	<div class="text-center"><h3>Lista de fotos</h3></div>
	<div class="text-right">
		<a href="administrativo.php?link=14" ><button type="button" class="btn btn-sm btn-info">Adicionar</button></a>
	</div>
	 <div class="table-responsive">
  	<table class="table table-striped table-sm table-dark table-hover">
  		<tr class="bg-primary">
				<th>Id</th>
				<th>Nome</th>
				<th>postador</th>
        <th>Data da postagem</th>
        <th class="text-center">Ações</th>
  			<!-- <th>Nome imagem</th> -->
  			<!-- <th>Postador</th> -->
  		</tr>
  		<?php

  		 $sql_gal = "SELECT * FROM galeria";
  		 $result_gal = $conexao->query($sql_gal);

  		 if($result_gal->num_rows > 0){
  			while($row = $result_gal->fetch_assoc())
  			{
					$id_foto = $row['id_galeria'];
  				echo "<tr>";

          echo "<td>" . $row['id_galeria'] . "</td>";
          echo "<td>" . $row['img_galeria'] . "</td>";
          echo "<td>" . $row['postador_img'] . "</td>";
  				echo "<td>" . $row['data_post_img'] . "</td>";
					?>

					<td>
					<div class="text-center">
						<!-- <a href="administrativo.php?link=7&id_obreiros=<?php echo $id_dev; ?>" ><button type="button" class="btn btn-sm btn-info">Postar</button></a> -->
						<?php if (($id_foto !=1) and ($id_foto !=2)): ?>
						<!-- <a href="administrativo.php?link=8&id_devocional=<?php echo $id_foto; ?>" ><button type="button" class="btn btn-sm btn-warning"> Editar </button></a> -->
						<a href="proc_apagar_foto_gal.php?id_galeria=<?php echo $id_foto; ?>" ><button type="button" class="btn btn-sm btn-danger">Excluir</button></a>
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

  </div>

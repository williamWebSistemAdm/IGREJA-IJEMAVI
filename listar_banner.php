

	<div class="text-center"><h3>Lista de Banner</h3></div>
	 <div class="table-responsive">
  	<table class="table table-striped table-sm table-dark table-hover">
  		<tr class="bg-primary">
        <!-- <th>Data postagem</th> -->
        <th>Id</th>
        <th>Nome Banner</th>
        <th>Dia do evento</th>
        <th class="text-center">Ações</th>
  		</tr>
  		<?php
  		// trazendo sessão
  			// $nome_obr_sessao = $_SESSION['nome_obr'];

  		 $sql_carrouses = "SELECT * FROM carrouses";
  		 $result_carrouses = $conexao->query($sql_carrouses);

  		 if($result_carrouses->num_rows > 0){
  			while($row = $result_carrouses->fetch_assoc())
  			{
					$id	= $row['id'];

  				echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['nome'] . "</td>";
					?><td><?php  echo date('d/m/Y', strtotime($row['data_evento']));  ?></td><?php
  				// echo "<td>" . $row['foto_obreiro'] . "</td>";
  				// echo "<td>" . $row['nome'] . "</td>";
  				// echo "<td>" . $row['id_obreiro_carousel_fk'] . "</td>";
					?>
					<td>
					<div class="text-center">
				    <a href="administrativo.php?link=20&id=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-info">Visualizar</button></a>
						<?php if (($id !=1) and ($id !=2)): ?>
				    <a href="administrativo.php?link=11&id=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-success"> Adicionar </button></a>
				    <a href="proc_apagar_banner.php?id=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-danger">Desativar</button></a>
						<?php endif; ?>
					</div>
					 </td>
					<?php
  				 echo "</tr>";
  			 }
  		 }
  		 else{
  			 echo "<tr>";

  			 // echo "<td>" . $row['foto_obreiro'] . "</td>";
  			 echo "<td>" . "Sem Dados" . "</td>";
  			 echo "<td>" . "Sem Dados" . "</td>";
  			 echo "<td>" . "Sem Dados" . "</td>";
  			 echo "<td>" . "Sem Dados" . "</td>";

  				echo "</tr>";

  		 }

  	 ?>
  	</table>

  </div>

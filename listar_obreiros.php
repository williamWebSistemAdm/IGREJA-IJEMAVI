
<h2>Lista de Usuarios</h2>
<div class="table-responsive">
	<table class="table table-striped table-sm table-dark table-hover">
	<tr class="bg-primary">
		<th>Nome</th>
		<!-- <th>Sobrenome</th> -->
		<th>CPF</th>
		<th>Telefone</th>
		<!-- <th>Sexo</th> -->
		<th>E-mail</th>
		<!-- <th>Endereço</th> -->
		<!-- <th>Data nascimento</th> -->
		<th>Perfil/Cargo</th>
		<th>Ações</th>
	</tr>
	<?php

	// trazendo sessão
		$nome_obr_sessao = $_SESSION['nome_obr'];
		// $id_obreiros =	$_SESSION['id_obreiros'];

		$sql_tipocargo = "SELECT * FROM tipocargo_obr";
	  $result_tipocargo = $conexao->query($sql_tipocargo);
	  if($result_tipocargo->num_rows > 0){
		 	while($row = $result_tipocargo->fetch_assoc())
	 		{
		 		$id_tipocargo = $row['id_tipocargo'];
				$Perfil_cargo_obr = $row['Perfil_cargo_obr'];
			}
		}


	 $sql_obr = "SELECT * FROM obreiros, tipocargo_obr WHERE id_obreiros='$id_tipocargo'";
	 $result_obr = $conexao->query($sql_obr);
	 if($result_obr->num_rows > 0){
		while($row = $result_obr->fetch_assoc())
		{
			$id = $row['id_obreiros'];
			// $Perfil_cargo_obr = $row['Perfil_cargo_obr'];
			echo "<tr>";

			// echo "<td>" . $row['foto_obreiro'] . "</td>";
			// echo "<td>" . $row['id_obreiros'] ." ". $row['sobrenome_obr'] .  "</td>";
			echo "<td>" . $row['nome_obr'] ." ". $row['sobrenome_obr'] .  "</td>";
			// echo "<td>" . $row['sobrenome_obr'] . "</td>";
			echo "<td>" . $row['cpf_obr'] . "</td>";
			echo "<td>" . $row['telefone_obr'] . "</td>";
			// echo "<td>" . $row['sexo_obr'] . "</td>";
			echo "<td>" . $row['email_obr'] . "</td>";
			// echo "<td>" . $row['endereco'] . "</td>";
			// echo "<td>" . $row['nascimento_obr'] . "</td>";
			echo "<td>" . $row['Perfil_cargo_obr'] . "</td>";
			// echo "<td>" . $row['foto_obreiro'] . "</td>";
			?>
			<td>
	    <a href="administrativo.php?link=2&id_obreiros=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-info">Visualizar</button></a>
	    <a href="administrativo.php?link=4&id_obreiros=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-warning">Editar</button></a>
	    <a href="administrativo.php?link=5&id_obreiros=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-danger">Desativar</button></a>
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
		 echo "<td>" . "Sem Dados" . "</td>";
		 echo "<td>" . "Sem Dados" . "</td>";
		 echo "<td>" . "Sem Dados" . "</td>";
		 echo "<td>" . "Sem Dados" . "</td>";
		 echo "<td>" . "Sem Dados" . "</td>";
		 echo "<td>" . "Sem Dados" . "</td>";

			echo "</tr>";

	 }

	?>
	</table>
</div>

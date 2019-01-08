
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

	 $sql_obr = "SELECT * FROM obreiros";
	 $result_obr = $conexao->query($sql_obr);

	 if($result_obr->num_rows > 0){
		while($row = $result_obr->fetch_assoc())
		{
			$id = $row['id_obreiros'];
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
			echo "<td>" . $row['tipocargo_obr'] . "</td>";
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

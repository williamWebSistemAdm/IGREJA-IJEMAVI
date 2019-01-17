<br>
	<div class="text-center"><h3>Lista de Usuarios</h3></div>
	<div class="text-right">
		<a href="administrativo.php?link=3" ><button type="button" class="btn btn-sm btn-success">Novo</button></a>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-sm table-dark table-hover">
		<tr class="bg-primary">
			<th>Id</th>
			<th>Perfil/Cargo</th>
			<th>Nome</th>
			<th class="text-center">Ações</th>
		</tr>
		<?php
			// Selecionando obr
		 $sql_obr = "SELECT * FROM obreiros, tipocargo_obr WHERE id_obreiros=id_tipocargo";
		 $result_obr = $conexao->query($sql_obr);
		 if($result_obr->num_rows > 0){
			while($row = $result_obr->fetch_assoc())
			{
				$id = $row['id_obreiros'];

				echo "<tr>";
				echo "<td>" . $row['id_obreiros'] . "</td>";
				echo "<td>" . $row['Perfil_cargo_obr'] . "</td>";
				echo "<td>" . $row['nome_obr'] ." ". $row['sobrenome_obr'] .  "</td>";

				?>



				<td>
				<div class="text-center">
			    <a href="administrativo.php?link=2&id_obreiros=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-info">Visualizar</button></a>
					<?php if (($id !=1)): ?>
			    <a href="administrativo.php?link=4&id_obreiros=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-warning"> Editar </button></a>
					<?php endif; ?>
					<?php if (($id !=1) and ($id !=2)): ?>
			    <a href="prm_apag_obr.php?id_obreiros=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-danger">Excluir</button></a>
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

				echo "</tr>";

		 }

		?>
		</table>
	</div>

<?php include 'seguranca.inc.php';//seguranca ?>
<br>
	<div class="text-center"><h3>Lista de Usuarios</h3></div>
	<div class="text-right">
		<a href="administrativo.php?link=3" ><button type="button" class="btn btn-sm btn-success">Novo</button></a>
	</div>
	<div class="table-responsive">
		<table class="table table-striped table-sm table-dark table-hover">
		<tr class="bg-primary">
			<th>Id</th>
			<th>foto</th>
			<th>Perfil/Cargo</th>
			<th>Nome</th>
			<th class="text-center">Ações</th>
		</tr>
		<?php
			// Selecionando obr
		 $sql_obr = "SELECT * FROM obreiros, tipocargo_obr, img_perfil_obr WHERE id_obreiros=id_tipocargo and id_img = id_obreiros";
		 $result_obr = $conexao->query($sql_obr);
		 if($result_obr->num_rows > 0){
			while($row = $result_obr->fetch_assoc())
			{
				$id = $row['id_obreiros'];
				$nome_obr = $row['nome_obr'];

				$id_foto = $row['id_img'];
				$img = "img/img_perfil_obr/"."foto".$id_foto.".jpg";

				echo "<tr>";
				echo "<td>" . $row['id_obreiros'] . "</td>";

				echo "<td>" . "<img class="."img_perfil_obr"." src=".$img." alt=".$nome_obr." title=".$nome_obr."><br><a class="."alterarfoto"." href=" . "administrativo.php?link=1" .">Alterar</a> " . "</td>";

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
	</div><br><br><br><br><br><br><br>


<h2>Lista de Usuarios</h2>
<div class="table-responsive">
	<table class="table table-striped table-sm table-dark table-hover">
	<tr class="bg-primary">
		<th>Nome</th>
		<th>CPF</th>
	</tr>

<?php
		$sql = "SELECT * FROM obreiros";
		$result = $conexao->query($sql);

		if($result->num_rows > 0)
		{
		 while($row = $result->fetch_assoc())
		 {
				echo "<tr>";
				echo "<td>" . $row['nome_obr'] . "</td>";
				echo "<td>" . $row['cpf_obr'] . "</td>";
				echo "</tr>";
			}
		 }
		 else{
				echo "Dados não encontrados";
		 }

 ?>
</table>
</div>

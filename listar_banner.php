

	<div class="text-center"><h3>Lista de Banner</h3></div>
	 <div class="table-responsive">
  	<table class="table table-striped table-sm table-dark table-hover">
  		<tr class="bg-primary">
        <th>Data postagem</th>
        <th>Dia do evento</th>
  			<!-- <th>Nome imagem</th> -->
  			<!-- <th>Postador</th> -->
  		</tr>
  		<?php
  		// trazendo sessão
  			// $nome_obr_sessao = $_SESSION['nome_obr'];

  		 $sql_carrouses = "SELECT * FROM carrouses";
  		 $result_carrouses = $conexao->query($sql_carrouses);

  		 if($result_carrouses->num_rows > 0){
  			while($row = $result_carrouses->fetch_assoc())
  			{
  				echo "<tr>";

          echo "<td>" . $row['data_hora_post'] . "</td>";
          echo "<td>" . $row['data_hora_post'] . "</td>";
  				// echo "<td>" . $row['foto_obreiro'] . "</td>";
  				// echo "<td>" . $row['nome'] . "</td>";
  				// echo "<td>" . $row['id_obreiro_carousel_fk'] . "</td>";

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

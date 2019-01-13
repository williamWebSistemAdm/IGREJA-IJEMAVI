<?php
	// Pegando dados para exibir nos inputs ( DOMINGO )
	$sql_dia_culto_dom = "SELECT * FROM dia_culto WHERE id_dia_culto=1"; $result_dia_culto_dom = $conexao->query($sql_dia_culto_dom );
	while($row = mysqli_fetch_assoc($result_dia_culto_dom)){
		$local_culto_dom = $row['local_culto']; 	$nome_culto_dom = $row['nome_culto'];	$hora_culto_dom = $row['hora_culto'];
	}
	// Pegando dados para exibir nos inputs ( SEGUNDA )
	$sql_dia_culto_seg = "SELECT * FROM dia_culto WHERE id_dia_culto=2"; $result_dia_culto_seg = $conexao->query($sql_dia_culto_seg);
	while($row = mysqli_fetch_assoc($result_dia_culto_seg)){
		$local_culto_seg = $row['local_culto']; 	$nome_culto_seg = $row['nome_culto'];	$hora_culto_seg = $row['hora_culto'];
	}
	// Pegando dados para exibir nos inputs ( TERÇA )
	$sql_dia_culto_ter = "SELECT * FROM dia_culto WHERE id_dia_culto=3"; $result_dia_culto_ter = $conexao->query($sql_dia_culto_ter);
	while($row = mysqli_fetch_assoc($result_dia_culto_ter)){
		$local_culto_ter = $row['local_culto']; 	$nome_culto_ter = $row['nome_culto'];	$hora_culto_ter = $row['hora_culto'];
	}
	// Pegando dados para exibir nos inputs ( QUARTA )
	$sql_dia_culto_qua = "SELECT * FROM dia_culto WHERE id_dia_culto=4"; $result_dia_culto_qua = $conexao->query($sql_dia_culto_qua);
	while($row = mysqli_fetch_assoc($result_dia_culto_qua)){
		$local_culto_qua = $row['local_culto']; 	$nome_culto_qua = $row['nome_culto'];	$hora_culto_qua = $row['hora_culto'];
	}
	// Pegando dados para exibir nos inputs ( QUINTA )
	$sql_dia_culto_qui = "SELECT * FROM dia_culto WHERE id_dia_culto=5"; $result_dia_culto_qui = $conexao->query($sql_dia_culto_qui);
	while($row = mysqli_fetch_assoc($result_dia_culto_qui)){
		$local_culto_qui = $row['local_culto']; 	$nome_culto_qui = $row['nome_culto'];	$hora_culto_qui = $row['hora_culto'];
	}
	// Pegando dados para exibir nos inputs ( SEXTA )
	$sql_dia_culto_sex = "SELECT * FROM dia_culto WHERE id_dia_culto=6"; $result_dia_culto_sex = $conexao->query($sql_dia_culto_sex);
	while($row = mysqli_fetch_assoc($result_dia_culto_sex)){
		$local_culto_sex = $row['local_culto']; 	$nome_culto_sex = $row['nome_culto'];	$hora_culto_sex = $row['hora_culto'];
	}
	// Pegando dados para exibir nos inputs ( SEXTA )
	$sql_dia_culto_sab = "SELECT * FROM dia_culto WHERE id_dia_culto=7"; $result_dia_culto_sab = $conexao->query($sql_dia_culto_sab);
	while($row = mysqli_fetch_assoc($result_dia_culto_sab)){
		$local_culto_sab = $row['local_culto']; 	$nome_culto_sab = $row['nome_culto'];	$hora_culto_sab = $row['hora_culto'];
	}

?>

		  <div class="text-center"><h2 class="h2">Editar dia de culto:</h2></div>
          <form method="post" action="proc_editar_diaculto.php">
						<h4 class="table-active">Domingo:</h4>
             <div class="row domingo">
              <div>
              	<input type="hidden" value="Domingo" name="dia_culto_dom">
							</div>
							<div class="col-md-4">
                <label>Local:</label>
              	<input class="form-control" type="text" name="local_dom" placeholder="Ex: Templo Sede" required value="<?php echo $local_culto_dom; ?>" >
							</div>
							<div class="col-md-5">
                <label>Tema do Culto:</label>
              	<input class="form-control" type="text" name="tema_dom" placeholder="Ex: Culto da Faília" required value="<?php echo $nome_culto_dom; ?>" >
							</div>
							<div class="col-md-2">
                <label>Horário:</label>
              	<input class="form-control" type="text" name="hora_dom" value="<?php echo $hora_culto_dom; ?>">
            	</div>
             </div><br>

						<h4 id='segunda'>Segunda-Feira:</h4><br>
             <div class="row segunda">
              <div>
              	<input type="hidden" value="Segunda" name="dia_culto_seg">
							</div>
							<div class="col-md-4">
                <label>Local:</label>
              	<input class="form-control" type="text" name="local_seg" placeholder="Ex: Templo Sede" required value="<?php echo $local_culto_seg; ?>" >
							</div>
							<div class="col-md-5">
                <label>Tema do Culto:</label>
              	<input class="form-control" type="text" name="tema_seg" placeholder="Ex: Culto Evangelístico" required value="<?php echo $nome_culto_seg; ?>"  >
							</div>
							<div class="col-md-2">
                <label>Horário:</label>
              	<input class="form-control" type="text" name="hora_seg" value="<?php echo $hora_culto_seg; ?>">
            	</div>
             </div><br>

						<h4>Terça-Feira:</h4><br>
             <div class="row terca">
              <div>
              	<input type="hidden" value="Terça" name="dia_culto_ter">
							</div>
							<div class="col-md-4">
                <label>Local:</label>
              	<input class="form-control" type="text" name="local_ter" placeholder="Ex: Templo Sede" required value="<?php echo $local_culto_ter; ?>" >
							</div>
							<div class="col-md-5">
                <label>Tema do Culto:</label>
              	<input class="form-control" type="text" name="tema_ter" placeholder="Ex: Culto de Ação Social" required value="<?php echo $nome_culto_ter; ?>" >
							</div>
							<div class="col-md-2">
                <label>Horário:</label>
              	<input class="form-control" type="text" name="hora_ter" value="<?php echo $hora_culto_ter; ?>">
            	</div>
             </div><br>

						<h4>Quarta-Feira:</h4><br>
             <div class="row quarta">
              <div>
              	<input type="hidden" value="Quarta" name="dia_culto_qua">
							</div>
							<div class="col-md-4">
                <label>Local:</label>
              	<input class="form-control" type="text" name="local_qua" placeholder="Ex: Templo Sede" required value="<?php echo $local_culto_qua; ?>" >
							</div>
							<div class="col-md-5">
                <label>Tema do Culto:</label>
              	<input class="form-control" type="text" name="tema_qua" placeholder="Ex: Livre" required value="<?php echo $nome_culto_qua; ?>" >
							</div>
							<div class="col-md-2">
                <label>Horário:</label>
              	<input class="form-control" type="text" name="hora_qua" value="<?php echo $hora_culto_qua; ?>">
            	</div>
             </div><br>

						<h4>Quinta-Feira:</h4><br>
             <div class="row quinta">
              <div>
              	<input type="hidden" value="Quinta" name="dia_culto_qui">
							</div>
							<div class="col-md-4">
                <label>Local:</label>
              	<input class="form-control" type="text" name="local_qui" placeholder="Ex: Templo Sede" required value="<?php echo $local_culto_qui; ?>" >
							</div>
							<div class="col-md-5">
                <label>Tema do Culto:</label>
              	<input class="form-control" type="text" name="tema_qui" placeholder="Ex: Culto da Vitória" required value="<?php echo $nome_culto_qui; ?>" >
							</div>
							<div class="col-md-2">
                <label>Horário:</label>
              	<input class="form-control" type="text" name="hora_qui" value="<?php echo $hora_culto_qui; ?>">
            	</div>
             </div><br>

						<h4>Sexta-Feira:</h4><br>
             <div class="row sexta">
              <div>
              	<input type="hidden" value="Sexta" name="dia_culto_sex">
							</div>
							<div class="col-md-4">
                <label>Local:</label>
              	<input class="form-control" type="text" name="local_sex" placeholder="Ex: Templo Sede" required value="<?php echo $local_culto_sex; ?>" >
							</div>
							<div class="col-md-5">
                <label>Tema do Culto:</label>
              	<input class="form-control" type="text" name="tema_sex" placeholder="Ex: Culto das Rebecas" required value="<?php echo $nome_culto_sex; ?>" >
							</div>
							<div class="col-md-2">
                <label>Horário:</label>
              	<input class="form-control" type="text" name="hora_sex" value="<?php echo $hora_culto_sex; ?>">
            	</div>
             </div><br>

						<h4>Sabado:</h4><br>
             <div class="row sabado">
              <div>
              	<input type="hidden" value="Sabado" name="dia_culto_sab">
							</div>
							<div class="col-md-4">
                <label>Local:</label>
              	<input class="form-control" type="text" name="local_sab" placeholder="Ex: Templo Sede" required value="<?php echo $local_culto_sab; ?>" >
							</div>
							<div class="col-md-5">
                <label>Tema do Culto:</label>
              	<input class="form-control" type="text" name="tema_sab" placeholder="Ex: Culto dos Jovens" required value="<?php echo $nome_culto_sab; ?>" >
							</div>
							<div class="col-md-2">
                <label>Horário:</label>
              	<input class="form-control" type="text" name="hora_sab" value="<?php echo $hora_culto_sab; ?>">
            	</div>
             </div><br>

            <button class="btn btn-primary" type="submit">Atualizar</button>
        </form>

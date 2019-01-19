<?php
	// Iniciando Sessão
	include 'conexao.inc.php';//conexao com o banco
	include 'seguranca.inc.php';//seguranca

	$sql_end_igj = "SELECT * FROM endereco_igreja";
	$result_end_igj = $conexao->query($sql_end_igj );
	while($row = $result_end_igj->fetch_assoc())
	{
		$id_end_igj = $row['id_end_igj'];
		$cep_end_igj = $row['cep_end_igj'];
		$estado_end_igj = $row['estado_end_igj'];
		$cidade_end_igj = $row['cidade_end_igj'];
		$bairro_end_igj = 	$row['bairro_end_igj'];
		$rua_end_igj = 	$row['rua_end_igj'];
		$numero_end_igj = 	$row['numero_end_igj'];
		$complemento_end_igj = 	$row['complemento_end_igj'];
	}

?>
<br>
	<div class="text-center "><h3>Endereço da igreja</h3></div>
	<div class="text-right">
		<a href="administrativo.php"><button type="button" class="btn btn-sm btn-info">Voltar</button></a>
		<a href="administrativo.php?link=17" ><button type="button" class="btn btn-sm btn-warning">Editar</button></a>
	</div>
	<table class="table table-hover table-striped col-12">
	  <tbody>
			<tr><th scope="row" class="text-center table-dark">Localização da igreja</th><td class="table-dark"></td></tr>
	    <tr><th scope="row">Id:</th><td><?php echo $id_end_igj ; ?></td></tr>
	    <tr><th scope="row">CEP:</th><td><?php echo $cep_end_igj ; ?></td></tr>
			<tr><th scope="row">Estado:</th><td><?php echo $estado_end_igj; ?></td></tr>
	    <tr><th scope="row">Cidade:</th><td><?php echo $cidade_end_igj; ?></td></tr>
	    <tr><th scope="row">Bairro:</th><td><?php echo $bairro_end_igj; ?></td></tr>
	    <tr><th scope="row">Rua:</th><td><?php echo $rua_end_igj; ?></td></tr>
	    <tr><th scope="row">Número:</th><td><?php echo $numero_end_igj; ?></td></tr>
	    <tr><th scope="row">Complemento:</th><td><?php echo $complemento_end_igj; ?></td></tr>
	    <tr><th scope="row"></th><td></td></tr>
	  </tbody>
	</table>

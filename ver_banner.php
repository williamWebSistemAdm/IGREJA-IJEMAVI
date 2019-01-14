<?php
	include 'includes/conexao.inc.php';//conexao com o banco
	include 'includes/seguranca.inc.php';//seguranca

	$id = $_GET['id'];

	// Consultar obreiros
	$sql_carrouses = "SELECT * FROM carrouses WHERE id='$id'";
	$result_carrouses = $conexao->query($sql_carrouses);
	while($row = $result_carrouses->fetch_assoc())
	{
		$imagen_carousel = $row['imagen_carousel'];
		$nome = $row['nome'];
		$data_hora_post = $row['data_hora_post'];
		$data_evento = $row['data_evento'];
	}

		//  Data hora
		setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
		date_default_timezone_set( 'America/Sao_Paulo' );
		$dia = strftime( '%e-%m-%Y ');
		$hora = strftime( ' %T');
?>
	<div class="text-center "><h3>Informações de Banner</h3></div><br>
	<div class="text-right">
		<a href="administrativo.php?link=10"><button type="button" class="btn btn-sm btn-info">Listar</button></a>
		<?php if (($id !=1) and ($id !=2)): ?>
		<a href="permissao_apagar\prm_apag_banner.php?id=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-danger">Desativar</button></a>
	<?php endif; ?>
	</div>
	<!-- <div class="text-right">	<?php	echo "Dia: " . $dia . "Hora: ".$hora;	?>	</div> -->
	<table class="table table-hover table-striped col-12">
	  <tbody>
			<tr><th scope="row" class="text-center table-dark">Dados do Banner:</th><td class="table-dark"></td></tr>
	    <tr><th scope="row">Id:</th><td><?php echo $id ; ?></td></tr>
	    <tr><th scope="row">Nome:</th><td><?php echo $imagen_carousel ; ?></td></tr>
			<tr><th scope="row">Nome escolhido pelo usuário:</th><td><?php echo $nome; ?></td></tr>
	    <tr><th scope="row">Postado em:</th><td><?php echo $data_hora_post; ?></td></tr>
	    <tr><th scope="row">Data do evento:</th><td><?php echo $data_evento; ?></td></tr>
	    <tr><th scope="row"></th><td></td></tr>
	  </tbody>
	</table>

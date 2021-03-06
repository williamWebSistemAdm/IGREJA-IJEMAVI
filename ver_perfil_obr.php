<?php
include 'conexao.inc.php';//conexao com o banco
include 'seguranca.inc.php';//seguranca

$id = $_GET['id_obreiros'];

// Consultar obreiros
$sql_consulta = "SELECT * FROM obreiros WHERE id_obreiros='$id' limit 1";
$result_consulta = $conexao->query($sql_consulta);
// $resultado_consulta = mysqli_fetch_assoc($result_consulta);
while($row = mysqli_fetch_assoc($result_consulta))
{
	$id_obreiros = $row['id_obreiros'];
	$nome_obr = $row['nome_obr'];
	$sobrenome_obr = $row['sobrenome_obr'];
	$cpf_obr = $row['cpf_obr'];
	$sexo_obr = $row['sexo_obr'];
	$email_obr = $row['email_obr'];
	$nascimento_obr = date('d/m/Y', strtotime($row['nascimento_obr']));
	$datacad_obr = date('d/m/Y', strtotime($row['datacad_obr']));
}

// Pegar o id_enderecos
$pegar_id_enderecos = "SELECT * FROM enderecos WHERE id_end='$id' limit 1";
$result_id_enderecos =  mysqli_query($conexao, $pegar_id_enderecos);
while($row = mysqli_fetch_assoc($result_id_enderecos))
	{
		$id_enderecos = $row['id_end'];
		$_SESSION['id_end'] = $id_enderecos;
		$cep_end = $row['cep_end'];
		$estado_end = $row['estado_end'];
		$cidade_end = $row['cidade_end'];
		$bairro_end = $row['bairro_end'];
		$rua_end = $row['rua_end'];
		$numero_end = $row['numero_end'];
		$complemento_end = $row['complemento_end'];
	}

// Pegar o  id_telefones
$pegar_id_telefones = "SELECT * FROM telefones WHERE id_telefones='$id' limit 1";
$result_id_telefones =  mysqli_query($conexao, $pegar_id_telefones);
while($rowt = mysqli_fetch_assoc($result_id_telefones))
	{
		$id_telefones = $rowt['id_telefones'];
    $_SESSION['id_telefones'] = $id_telefones;
		$tel_watzap = $rowt['tel_watzap'];
		$tel_cel = $rowt['tel_cel'];
		$tel_resid = $rowt['tel_resid'];
	}

// Pegar o  tipocargo_obr
$pegar_tipocargo_obr = "SELECT * FROM tipocargo_obr, img_perfil_obr WHERE id_tipocargo='$id' and id_img = '$id' limit 1";
$result_tipocargo_obr =  mysqli_query($conexao, $pegar_tipocargo_obr);
while($rowc = mysqli_fetch_assoc($result_tipocargo_obr))
  	{
		$img = "img/img_perfil_obr/"."foto".$id.".jpg";

  		$id_tipocargo_obr = $rowc['id_tipocargo'];
      $_SESSION['id_tipocargo'] = $id_tipocargo_obr;
  		$Perfil_cargo_obr = $rowc['Perfil_cargo_obr'];
  	}
		//  Data hora
		setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
		date_default_timezone_set( 'America/Sao_Paulo' );
		$dia = strftime( '%e-%m-%Y ');
		$hora = strftime( ' %T');
?>
	<div class="text-center "><h3>Perfil Obreiro(a)</h3></div><br>
	<div class="text-right">

		<a href="administrativo.php?link=23&id_obreiros=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-info">Renviar dados de acesso ao Email</button></a>
		
		<a href="administrativo.php?link=1" ><button type="button" class="btn btn-sm btn-info">Listar</button></a>
		<?php if (($id !=1)): ?>
		<a href="administrativo.php?link=4&id_obreiros=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-warning"> Editar </button></a>
		<?php endif; ?>
		<?php if (($id !=1) and ($id !=2)): ?>
		<a href="prm_apag_obr.php?id_obreiros=<?php echo $id; ?>" ><button type="button" class="btn btn-sm btn-danger">Excluir</button></a>
		<?php endif; ?>
	</div>
	<!-- <div class="text-right">	<?php	echo "Dia: " . $dia . "Hora: ".$hora;	?>	</div> -->
	<table class="table table-hover table-striped col-12">
		<tbody>
			<tr><th scope="row" class="text-center table-dark">Foto:</th><td class="table-dark"></td></tr>
			<!-- Foto Perfil -->
	    <tr><th scope="row" class="text-center"><?php echo

	     "<img class="."img_perfil_obr1"." src=".$img." alt=".$nome_obr." title=".$nome_obr."><br><a class="."alterarfoto"." href=" . "administrativo.php?link=5&id_obreiros=".$id." " .">Alterar</a> "  ;


	      ?></th><td></td></tr>

			<tr><th scope="row" class="text-center table-dark">Função:</th><td class="table-dark"></td></tr>
			<tr><th scope="row">Perfil/Cargo:</th><td><?php echo $Perfil_cargo_obr; ?></td></tr>
		</tbody>
	  <tbody>
			<tr><th scope="row" class="text-center table-dark">Dados pesoais:</th><td class="table-dark"></td></tr>
	    <tr><th scope="row">Identificador:</th><td><?php echo $id; ?></td></tr>
	    <tr><th scope="row">Nome:</th><td><?php echo $nome_obr .' '. $sobrenome_obr; ?></td></tr>
	    <tr><th scope="row">CPF:</th><td><?php echo $cpf_obr; ?></td></tr>
	    <tr><th scope="row">Sexo:</th><td><?php echo $sexo_obr; ?></td></tr>
	    <tr><th scope="row">Email:</th><td><?php echo $email_obr; ?></td></tr>
	    <tr><th scope="row">Nascimento:</th><td><?php echo $nascimento_obr; ?></td></tr>
	    <tr><th scope="row">Cadastrado em:</th><td><?php echo $datacad_obr; ?></td></tr>
	  </tbody>
	  <tbody>
	    <tr><th scope="row" class="text-center table-dark">Contatos:</th><td class="table-dark"></td></tr>
	    <tr><th scope="row">Celular:</th><td><?php echo $tel_cel; ?></td></tr>
	    <tr><th scope="row">Tel Residencial:</th><td><?php echo $tel_resid; ?></td></tr>
	    <tr><th scope="row">WatZap:</th><td><?php echo $tel_watzap; ?></td></tr>
	  </tbody>
	  <tbody>
	    <tr><th scope="row" class="text-center table-dark">Endereço:</th><td class="table-dark"></td></tr>
	    <tr><th scope="row">CEP:</th><td><?php echo $cep_end; ?></td></tr>
	    <tr><th scope="row">Estado:</th><td><?php echo $estado_end; ?></td></tr>
	    <tr><th scope="row">Cidade:</th><td><?php echo $cidade_end; ?></td></tr>
	    <tr><th scope="row">Bairro:</th><td><?php echo $bairro_end; ?></td></tr>
	    <tr><th scope="row">Rua:</th><td><?php echo $rua_end; ?></td></tr>
	    <tr><th scope="row">Número:</th><td><?php echo $numero_end; ?></td></tr>
	    <tr><th scope="row">Complemento:</th><td><?php echo $complemento_end; ?></td></tr>
	    <tr><th scope="row"></th><td></td></tr>
	  </tbody>
	</table><br><br><br><br><br><br><br>

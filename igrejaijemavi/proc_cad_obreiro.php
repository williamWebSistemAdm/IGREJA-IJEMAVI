<?php
//Conexão com Banco
  	include 'conexao.inc.php';
    SESSION_START();


    // $id_enderecos = $_SESSION['id_end'] ;
    // $id_telefones = $_SESSION['id_telefones'];
    // $id_tipocargo_obr = $_SESSION['id_tipocargo'];

  $tipocargo_obr = $_POST['tipocargo_obr'];
  $nome_obr = $_POST['nome_obr'];
  $sobrenome_obr = $_POST['sobrenome_obr'];
  $cpf_obr = $_POST['cpf_obr'];
	$email_obr = $_POST['email_obr'];
  $nascimento_obr = $_POST['nascimento_obr'];
  $sexo_obr = $_POST['sexo_obr'];

  $tel_cel = $_POST['tel_cel'];
  $tel_watzap = $_POST['tel_watzap'];
  $tel_resid = $_POST['tel_resid'];

  $cep_end = $_POST['cep_end'];
  $estado_end = $_POST['estado_end'];
  $cidade_end = $_POST['cidade_end'];
  $bairro_end = $_POST['bairro_end'];
  $rua_end = $_POST['rua_end'];
  $numero_end = $_POST['numero_end'];
  $complemento_end = $_POST['complemento_end'];

  $senha_obr = $_POST['senha_obr'];
	$confsenha_obr = $_POST['confsenha_obr'];


  // PROTEÇÃO CONTRA ATAQUE SQL INJECTION  COM addslashes()
    // foreach ($_POST as $indice => $email_obr) {
    //   $_POST[$indice] = addslashes($_POST[$indice]);
    // };

  $sql_obr = "SELECT * FROM obreiros";
  $result_obr = $conexao->query($sql_obr);

  $sql_end = "SELECT * FROM enderecos";
  $result_end = $conexao->query($sql_end);

  $sql_tel = "SELECT * FROM telefones";
  $result_tel = $conexao->query($sql_tel);

  $sql_tipocargo_obr = "SELECT * FROM tipocargo_obr";
  $result_tipocargo_obr = $conexao->query($sql_tipocargo_obr);

  // $usuario = addslashes($_POST['usuario']);
  // $usuario = trim($usuario);
  // $senha = addslashes($_POST['senha']);
  // $senha = trim($senha);


    if($senha_obr == $confsenha_obr){

      $grava1 = "INSERT INTO obreiros (nome_obr, sobrenome_obr, cpf_obr, email_obr, nascimento_obr, sexo_obr, senha_obr, datacad_obr)
      VALUES
      ('$nome_obr','$sobrenome_obr','$cpf_obr','$email_obr','$nascimento_obr','$sexo_obr', '$senha_obr',NOW())";
      $grava_obr = $conexao->query($grava1);

      $grava_end = "INSERT INTO enderecos (  cep_end , estado_end, cidade_end, bairro_end, rua_end, numero_end, complemento_end)
      VALUES ('$cep_end', '$estado_end', '$cidade_end','$bairro_end','$rua_end','$numero_end','$complemento_end')";
      $gravando_end = $conexao->query($grava_end);

      $grava_tel = "INSERT INTO telefones (tel_cel, tel_watzap, tel_resid)
      VALUES ('$tel_cel', '$tel_watzap', '$tel_resid')";
      $gravando_tel = $conexao->query($grava_tel);

      $grava_tipocargo_obr = "INSERT INTO tipocargo_obr ( Perfil_cargo_obr)
      VALUES ( '$tipocargo_obr')";
      $gravando_tipocargo_obr = $conexao->query($grava_tipocargo_obr);



	//Pegar o maior e ultimo id_enderecos cadastrado
	$pegar_id_enderecos = "SELECT MAX(id_end) FROM enderecos";
	$result_id_enderecos =  mysqli_query($conexao, $pegar_id_enderecos);
	while($row = mysqli_fetch_row($result_id_enderecos))
	{
		$id_enderecos = $row[0];
		// echo "id endereço: ".$id_enderecos;
    // echo "<br>";
	}

	//Pegar o maior e ultimo id_telefones cadastrado
	$pegar_id_telefones = "SELECT MAX(id_telefones) FROM telefones";
	$result_id_telefones =  mysqli_query($conexao, $pegar_id_telefones);
	while($row = mysqli_fetch_row($result_id_telefones))
	{
		$id_telefones = $row[0];
		// echo "id telefone: ".$id_telefones;
    // echo "<br>";
	}

	//Pegar o maior e ultimo id_obreiros cadastrado
	$pegar_id_obreiros = "SELECT MAX(id_obreiros) FROM obreiros";
	$result_id_obreiros =  mysqli_query($conexao, $pegar_id_obreiros);
	while($row = mysqli_fetch_row($result_id_obreiros))
	{
		$id_obreiros = $row[0];
		// echo "id obreiros: ".$id_obreiros;
    // echo "<br>";
	}

	//Pegar o maior e ultimo id_tipocargo_obr cadastrado
	$pegar_id_tipocargo_obr = "SELECT MAX(id_tipocargo) FROM tipocargo_obr";
	$result_id_tipocargo_obr =  mysqli_query($conexao, $pegar_id_tipocargo_obr);
	while($row = mysqli_fetch_row($result_id_tipocargo_obr))
	{
		$id_tipocargo = $row[0];
		// echo "id tipocargo: ".$id_tipocargo;
	}

	$sql1 = "UPDATE obreiros SET endereco='$id_enderecos', tipocargo_obr='$id_obreiros' WHERE id_obreiros='$id_obreiros'";
	$salvar1 = mysqli_query($conexao, $sql1);

	$sql2 = "UPDATE obreiros SET telefone_obr='$id_telefones' WHERE id_obreiros='$id_obreiros'";
	$salvar2 = mysqli_query($conexao, $sql2);

	$sql4 = "UPDATE enderecos SET id_obreiro_end_fk='$id_obreiros' WHERE id_end='$id_obreiros'";
	$salvar4 = mysqli_query($conexao, $sql4);

	$sql5 = "UPDATE telefones SET id_obreiro_tel_fk='$id_obreiros' WHERE id_telefones='$id_obreiros'";
	$salvar5 = mysqli_query($conexao, $sql5);


	$sql6 = "UPDATE tipocargo_obr SET	id_tipocargo_obr_fk='$id_tipocargo' WHERE id_tipocargo='$id_obreiros'";
	$salvar6 = mysqli_query($conexao, $sql6);

  if($result_obr->num_rows > 0){
    echo "<script>alert('Usuário cadastrado com sucesso!.'); window.location.href='administrativo.php?link=1';</script>";
  }else {
    echo "<script>alert('Erro ao cadastrar usuário.'); window.location.href='administrativo.php?link=1';</script>";
  }

  } else {
    echo "<script>alert('Senha e Confirmação de senha estão Diferentes,precisam ser iguais!'); window.location.href='administrativo.php?link=1';</script>";
  }


?>

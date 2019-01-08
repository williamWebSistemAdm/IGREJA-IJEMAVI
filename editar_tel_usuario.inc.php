<?php
//Conexão com Banco
  	include 'includes/conexao.inc.php';
    // SESSION_START();


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
	// $confsenha_obr = $_POST['confsenha_obr'];
  // $datacad_obr = date("Y-m-d - H:i:s");
      // $data = date("Y-m-d - H:i:s");


  //variável global
  // $_SESSION['confsenha'] = $confsenha;



    //Confirmação de senha


  $sql_obr = "SELECT * FROM obreiros";
  $result_obr = $conexao->query($sql_obr);

  $sql_end = "SELECT * FROM enderecos";
  $result_end = $conexao->query($sql_end);

  $sql_tel = "SELECT * FROM telefones";
  $result_tel = $conexao->query($sql_tel);

  // $usuario = addslashes($_POST['usuario']);
  // $usuario = trim($usuario);
  // $senha = addslashes($_POST['senha']);
  // $senha = trim($senha);

  // if($senha == $_SESSION['confsenha'])
  //   {
      // $grava = "INSERT INTO usuarios ( cpf_obr, datacad_obr, email_obr, endereco, nascimento_obr, nome_obr, senha_obr, sexo_obr, telefone, tipo_cargo ) VALUES ('$cpf_obr', DATE(now),'$email_obr','$endereco','$nascimento_obr','$nome_obr','$senha_obr',,'$sexo_obr''$telefone','$tipo_cargo')";
      $grava1 = "INSERT INTO obreiros (  tipocargo_obr , nome_obr, sobrenome_obr, cpf_obr, email_obr, nascimento_obr, sexo_obr, senha_obr, datacad_obr)
      VALUES
      ('$tipocargo_obr','$nome_obr','$sobrenome_obr','$cpf_obr','$email_obr','$nascimento_obr','$sexo_obr', '$senha_obr',NOW())";
      $grava_obr = $conexao->query($grava1);




      $grava_end = "INSERT INTO enderecos (  cep_end , estado_end, cidade_end, bairro_end, rua_end, numero_end, complemento_end)
      VALUES ('$cep_end', '$estado_end', '$cidade_end','$bairro_end','$rua_end','$numero_end','$complemento_end')";
      $gravando_end = $conexao->query($grava_end);

      $grava_tel = "INSERT INTO telefones (tel_cel, tel_watzap, tel_resid)
      VALUES ('$tel_cel', '$tel_watzap', '$tel_resid')";
      $gravando_tel = $conexao->query($grava_tel);


    	// $sql1 = "INSERT INTO usuarios (perfil, nome) VALUES ('$perfil', '$nome')";
    	// $salvar1 = mysqli_query($conexao, $sql1);

	// $sql1 = "INSERT INTO usuarios (perfil, matricula, nome, email, senha) VALUES ('$perfil', '$matricula', '$nome', '$email',  '$senha')";
	// $salvar1 = mysqli_query($conexao, $sql1);

	// $sql2 = "INSERT INTO telefones (numero) VALUES ('$telefone')";
	// $salvar2 = mysqli_query($conexao, $sql2);


	// //Pegar idTelefone
	// $pegarTelefone = "SELECT MAX(idTelefone) FROM telefones";
	// $resultTelefone =  mysqli_query($conexao, $pegarTelefone);

	// while($row = mysqli_fetch_row($resultTelefone))
	// {
	// 	$idTelefone = $row[0];
	// 	echo $idTelefone;
	// }


	//Pegar id_enderecos
	$pegar_id_enderecos = "SELECT MAX(id_end) FROM enderecos";
	$result_id_enderecos =  mysqli_query($conexao, $pegar_id_enderecos);

	while($row = mysqli_fetch_row($result_id_enderecos))
	{
		$id_enderecos = $row[0];
		echo "id endereço: ".$id_enderecos;
    echo "<br>";
	}

	//Pegar id_telefones
	$pegar_id_telefones = "SELECT MAX(id_telefones) FROM telefones";
	$result_id_telefones =  mysqli_query($conexao, $pegar_id_telefones);

	while($row = mysqli_fetch_row($result_id_telefones))
	{
		$id_telefones = $row[0];
		echo "id telefone: ".$id_telefones;
    echo "<br>";
	}

	//Pegar id_obreiros
	$pegar_id_obreiros = "SELECT MAX(id_obreiros) FROM obreiros";
	$result_id_obreiros =  mysqli_query($conexao, $pegar_id_obreiros);

	while($row = mysqli_fetch_row($result_id_obreiros))
	{
		$id_obreiros = $row[0];
		echo "id obreiros: ".$id_obreiros;
	}

	$sql1 = "UPDATE obreiros SET endereco='$id_enderecos' WHERE id_obreiros='$id_obreiros'";
	$salvar1 = mysqli_query($conexao, $sql1);

	$sql2 = "UPDATE obreiros SET telefone_obr='$id_telefones' WHERE id_obreiros='$id_obreiros'";
	$salvar2 = mysqli_query($conexao, $sql2);

	$sql4 = "UPDATE enderecos SET id_obreiro_end_fk='$id_obreiros' WHERE id_end='$id_obreiros'";
	$salvar4 = mysqli_query($conexao, $sql4);

	$sql5 = "UPDATE telefones SET id_obreiro_tel_fk='$id_obreiros' WHERE id_telefones='$id_obreiros'";
	$salvar5 = mysqli_query($conexao, $sql5);


	// $sql4 = "UPDATE usuarios SET idUnidade='$idUnidade' WHERE idUsuario='$idUsuario'";
	// $salvar4 = mysqli_query($conexao, $sql4);

	 // header("Location:listaUsuarios.php");

?>

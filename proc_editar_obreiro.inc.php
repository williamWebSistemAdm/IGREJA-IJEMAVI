<?php
//Conexão com Banco
  	include 'includes/conexao.inc.php';
    SESSION_START();

    $id_enderecos = $_SESSION['id_end'] ;
    $id_telefones = $_SESSION['id_telefones'];
    $id_tipocargo_obr = $_SESSION['id_tipocargo'];

  $id_obreiros = $_POST['id_obreiros'];
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
  // $_SESSION['confsenha_obr'] = $confsenha_obr;



    //Confirmação de senha


  $sql_obr = "SELECT * FROM obreiros";
  $result_obr = $conexao->query($sql_obr);

  $sql_end = "SELECT * FROM enderecos";
  $result_end = $conexao->query($sql_end);

  $sql_tel = "SELECT * FROM telefones";
  $result_tel = $conexao->query($sql_tel);

  $tipocargo_obr = "SELECT * FROM tipocargo_obr";
  $result_tipocargo_obr = $conexao->query($tipocargo_obr);

  // $usuario = addslashes($_POST['usuario']);
  // $usuario = trim($usuario);
  // $senha = addslashes($_POST['senha']);
  // $senha = trim($senha);

  // if($senha == $_SESSION['confsenha_obr'])
  //   {

  $sql4 = "UPDATE obreiros SET nome_obr='$nome_obr', sobrenome_obr='$sobrenome_obr', cpf_obr='$cpf_obr', email_obr='$email_obr', nascimento_obr='$nascimento_obr', sexo_obr='$sexo_obr', senha_obr='$senha_obr', datacad_obr=NOW() WHERE id_end='$id_obreiros'";
  $salvar4 = mysqli_query($conexao, $sql4);


	$sql4 = "UPDATE enderecos SET cep_end='$cep_end', estado_end='$estado_end', cidade_end='$cidade_end', bairro_end='$bairro_end', rua_end='$rua_end', numero_end='$numero_end', complemento_end='$complemento_end' WHERE id_end='$id_obreiros'";
	$salvar4 = mysqli_query($conexao, $sql4);

	$sql5 = "UPDATE telefones SET tel_cel='$tel_cel', tel_watzap='$tel_watzap', tel_resid='$tel_resid',  WHERE id_telefones='$id_obreiros'";
	$salvar5 = mysqli_query($conexao, $sql5);

	$sql6 = "UPDATE tipocargo_obr SET	Perfil_cargo_obr='$tipocargo_obr' WHERE id_tipocargo='$id_obreiros'";
	$salvar6 = mysqli_query($conexao, $sql6);

  if($result_obr->num_rows > 0){
      echo "<script>alert('Usuário atualizado com suceso!.'); window.location.href='administrativo.php?link=1';</script>";
    }else {
      echo "<script>alert('Erro ao atualizar dados.'); window.location.href='administrativo.php?link=1';</script>";
    };
	 // header("Location:administrativo.php?link=1.php");
   // $sql1 = "UPDATE obreiros SET endereco='$id_enderecos' WHERE id_obreiros='$id_obreiros'";
   // $salvar1 = mysqli_query($conexao, $sql1);
   //
   // $sql2 = "UPDATE obreiros SET telefone_obr='$id_telefones' WHERE id_obreiros='$id_obreiros'";
   // $salvar2 = mysqli_query($conexao, $sql2);

?>

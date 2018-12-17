<?php
//Conexão com Banco
  	include 'conexao.inc.php';
    // SESSION_START();


  $perfil_cargo = $_POST['perfil_cargo'];
  $nome_obr = $_POST['nome_obr'];
	$cpf_obr = $_POST['cpf_obr'];
	$datacad_obr = $_POST['datacad_obr'];
	$email_obr = $_POST['email_obr'];
	$endereco = $_POST['endereco'];
	$nascimento_obr = $_POST['nascimento_obr'];
	$sexo_obr = $_POST['sexo_obr'];
  $telefone_obr = $_POST['telefone_obr'];
  $senha_obr = $_POST['senha_obr'];
	//$confsenha = $_POST['confsenha'];

  //variável global
  $_SESSION['confsenha'] = $confsenha;



    //Confirmação de senha
  $sql_obr = "SELECT * FROM obreiros";
    $result_obr = $conexao->query($sql_obr);
  if($senha == $_SESSION['confsenha'])
    {
      $grava = "INSERT INTO usuarios ( cpf_obr, datacad_obr, email_obr, endereco, nascimento_obr, nome_obr, senha_obr, sexo_obr, telefone, tipo_cargo ) VALUES ('$cpf_obr', DATE(now),'$email_obr','$endereco','$nascimento_obr','$nome_obr','$senha_obr',,'$sexo_obr''$telefone','$tipo_cargo')";
      $grava1 = $conexao->query($grava);
      // $grava1 = mysqli_query($conexao, $grava);

      if($result_obr->num_rows > 0){
       echo "<script>alert('Usuário cadastrado com suceso!.'); window.location.href='lista_obr.php';</script>";
      }
    }else
      {
        echo "<script>alert('Não foi possível cadastrar, Senhas diferentes.'); location.href='cad_usuario.php';</script>";
      }

      // $nomeUnidade = $_POST['nomeUnidade'];

        	// $senha = md5($senha*10);

        // if($unidade == 'Selecione a unidade')
        // die("A unidade não foi escolhida!");

    // PROTEÇÃO CONTRA ATAQUE SQL INJECTION  COM addslashes()
      // foreach ($_POST as $indice => $value) {
      //   $_POST[$indice] = addslashes($_POST[$indice]);
      // };



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

	// //Pegar idUsuario
	// $pegarUsuario = "SELECT MAX(idUsuario) FROM usuarios";
	// $resultUsuario =  mysqli_query($conexao, $pegarUsuario);

	// while($row = mysqli_fetch_row($resultUsuario))
	// {
	// 	$idUsuario = $row[0];
	// 	echo $idUsuario;
	// }

	// //Pegar idUnidade
	// $pegarUnidade = "SELECT * FROM unidades WHERE nomeUnidade = '$nomeUnidade'";
	// $resultUnidade =  mysqli_query($conexao, $pegarUnidade);

	// while($row = mysqli_fetch_row($resultUnidade))
	// {
	// 	$idUnidade = $row[0];
	// }

	// $sql3 = "UPDATE usuarios SET idTelefone='$idTelefone' WHERE idUsuario='$idUsuario'";
	// $salvar3 = mysqli_query($conexao, $sql3);

	// $sql4 = "UPDATE usuarios SET idUnidade='$idUnidade' WHERE idUsuario='$idUsuario'";
	// $salvar4 = mysqli_query($conexao, $sql4);

	 // header("Location:listaUsuarios.php");

?>

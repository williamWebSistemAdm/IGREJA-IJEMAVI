<?php
    // Iniciando Sessão
    session_start();
    //Conecção com Banco
    include 'conexao.inc.php';//conexão com o banco

    $usuario = $_POST['email_obr'];
    $senha = $_POST['senha_obr'];


    $result = "SELECT * FROM obreiros WHERE email_obr = '$usuario' AND senha_obr = '$senha' limit 1";
    $resultado = $conexao->query($result);
    if($resultado->num_rows == 1){
      while($row = $resultado->fetch_assoc()){
      echo $row['nome_obr'];
      // colocando dados em variavel
       $id_obreiros = $row['id_obreiros'];
       $email_obr = $row['email_obr'];
       $nome_obr = $row['nome_obr'];

       $senha_obr = $row['senha_obr'];

       // colocando variavel em sessao
       $_SESSION['id_obreiros'] = $row['id_obreiros'];
       $_SESSION['usuario_obr'] = $row['email_obr']; // O USUÁRIO É O EMAIL
       $_SESSION['email_obr'] = $row['email_obr'];
       $_SESSION['nome_obr'] = $row['nome_obr'];
       $_SESSION['tipocargo_obr'] = $row['tipocargo_obr'];
       $_SESSION['senha_obr'] = $row['senha_obr'];

       // msg Bem vindo
       // $_SESSION['Bem_vindo'] = "Bem Vindo " . $_SESSION['nome_obr'] ;

       if (($id_obreiros == 1) || ($id_obreiros == 2)) {
         header('Location: ../administrativo.php');
       }else {
         header('Location: ../usuario_comum.php');
       }
      }

    }else {
        // msg erro
      $_SESSION['erro_login'] = "Usuário ou senha inválido!";
       //  Manda usuário para tela de login
      header('Location: ../restrito.php');
    }


  ?>
      <!-- Fim do codigo validação usuario -->

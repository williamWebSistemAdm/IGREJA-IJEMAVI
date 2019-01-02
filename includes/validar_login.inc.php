<?php
    // Iniciando Sessão
    session_start();
    //Conecção com Banco
    include 'conexao.inc.php';//conexão com o banco

    $usuario = $_POST['email_obr'];
    $senha = $_POST['senha_obr'];

    // echo "$usuario  - <br> $senha";

    $result = "SELECT * FROM obreiros WHERE email_obr = '$usuario' AND senha_obr = '$senha' limit 1";

    $resultado = $conexao->query($result);
    if($resultado->num_rows == 1){
      while($row = $resultado->fetch_assoc()){
      echo $row['nome_obr'];
      // colocando dados em variavel
       $id_obreiros = $row['id_obreiros'];
       $email_obr = $row['email_obr'];
       $nome_obr = $row['nome_obr'];
       $tipocargo_obr = $row['tipocargo_obr'];
       $senha_obr = $row['senha_obr'];

       // colocando variavel em sessao
       $_SESSION['id_obreiros'] = $id_obreiros;
       $_SESSION['usuario_obr'] = $usuario;
       $_SESSION['email_obr'] = $email_obr;
       $_SESSION['nome_obr'] = $nome_obr;
       $_SESSION['tipocargo_obr'] = $tipocargo_obr;
       $_SESSION['senha_obr'] = $senha_obr;

       // msg Bem vindo
       $_SESSION['Bem_vindo'] = "Bem Vindo " . $_SESSION['nome_obr'] ;

         if ($_SESSION['tipocargo_obr'] == "adm_padrao" || "pr_presidente") {
           header('Location: administrativo.php');
         }else {
           header('Location: usuario_comum.php');
         }
      }

    }else {
        // msg erro
      $_SESSION['erro_login'] = "Usuário ou senha inválido!";
       //  Manda usuário para tela de login
      header('Location: ../restrito.php');
    }

    // echo "<br><span style='color:green;'>".'Dados encontrados'."</span>";
    // if (empty($resultado)) {
    //     // msg erro
    //   $_SESSION['erro_login'] = 'Usuário ou senha inválido!';
    //    //  Manda usuário para tela de login
    //   header('Location: ../restrito.php');
    // }

    //
    // if (empty($resultado)){
    //     //  Mensagem de erro
    //     $_SESSION['erro_login'] = "Usuário ou senha inválido!";
    //     //  Manda usuário para tela de login
    //     header('Location: ../restrito.php');
    //   }
    //
    // // Define os valores atribuidos na sessão do usuário
    // $_SESSION['id_obreiros'] = $resultado['id_obreiros'];
    // $_SESSION['nome_obr'] = $resultado['nome_obr'];
    // $_SESSION['senha_obr'] = $resultado['senha_obr'];
    // $_SESSION['usuario_obr'] = $resultado['email_obr'];
    // $_SESSION['tipocargo_obr'] = $resultado['tipocargo_obr'];

    //  Manda usuário para administrativo
    // if ($_SESSION['tipocargo_obr'] == 'Adm_padrao' || 'pr_presidente'){
    //     header('Location: administrativo.php');
    //   }







  ?>
      <!-- Fim do codigo validação usuario -->

<?php
    // Iniciando Sessão
    session_start();
    //Conecção com Banco
    include 'includes/conexao.inc.php';//conexão com o banco

    $usuario = $_POST['email_obr'];
    $senha = $_POST['senha_obr'];

    $result = "SELECT * FROM obreiros WHERE email_obr = '$usuario' AND senha_obr = '$senha' limit 1";
    $resultado = mysqly_fetch_assoc($result);

    if (empty($resultado)){
        //  Mensagem de erro
        $_SESSION['erro_login'] = "Usuário ou senha inválido!";
        //  Manda usuário para tela de login
        header('Location: restrito.php');
      }
    
    // Define os valores atribuidos na sessão do usuário
    $_SESSION['id_obreiros'] = $resultado['id_obreiros'];
    $_SESSION['nome_obr'] = $resultado['nome_obr'];
    $_SESSION['senha_obr'] = $resultado['senha_obr'];
    $_SESSION['usuario_obr'] = $resultado['email_obr'];
    $_SESSION['tipocargo_obr'] = $resultado['tipocargo_obr'];
    
    //  Manda usuário para administrativo
    if ($_SESSION['tipocargo_obr'] == 'Adm_padrao' || 'pr_presidente'){
        header('Location: includes/administrativo.php');
      }








    if (isset($_POST['entrar']) && $_POST['entrar'] == 'Login'){
      // PROTEÇÃO CONTRA ATAQUE SQL INJECTION  COM addslashes(retira caracteres especiais) e trim(retira espaços em branco)
      $email_obr = addslashes($_POST['email_obr']);
      $email_obr = trim($email_obr);
      $senha_obr = addslashes($_POST['senha_obr']);
      $senha_obr = trim($senha_obr);


      if (empty($email_obr) || empty($senha_obr)){
        header('Location: index.php');
      }
      else{
            $sql = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha' limit 1";
            $result = $conexao->query($sql);
            if($result->num_rows == 0){
            echo "<br><span style='color:orange;'>".'Dados não encontrados'."</span>";
            }
            else if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
               $idUsuario = $row['idUsuario'];
               $nome = $row['nome'];
               $perfil = $row['perfil'];
               $senha = $row['senha'];
               // $confsenha = $row['confsenha'];
              }
              if ($perfil == 'administrador') {

                $_SESSION['idUsuario'] = $idUsuario;
                $_SESSION['matricula'] = $matricula;
                $_SESSION['nome'] = $nome;
                $_SESSION['perfil'] = $perfil;
                $_SESSION['senha'] = $senha;
                // $_SESSION['confsenha'] = $confsenha;
                // $_SESSION['confsenha'] = $confsenha
                header('Location: areaadm.php');
                exit;
              } else if ($perfil == 'agente'){
                $_SESSION['idUsuario'] = $idUsuario;
                $_SESSION['matricula'] = $matricula;
                $_SESSION['nome'] = $nome;
                $_SESSION['perfil'] = $perfil;
                $_SESSION['senha'] = $senha;
                // $_SESSION['confsenha'] = $confsenha;
                // $_SESSION['confsenha'] = $confsenha
                header('Location: areaagente.php');
                exit;
              }
            }
          }
    }


  ?>
      <!-- Fim do codigo validação usuario -->

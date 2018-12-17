<?php
//Conecção com Banco
    include 'conexao.inc.php';//inclusão do arquivo de conexão com o banco

    if (isset($_POST['entrar']) && $_POST['entrar'] == 'Login'){
      // PROTEÇÃO CONTRA ATAQUE SQL INJECTION  COM addslashes()
      $matricula = addslashes($_POST['matricula']);
      $senha = addslashes($_POST['senha']);

      if (empty($matricula) || empty($senha)){
        header('Location: index.php');
      }
      else{
            $sql = "SELECT * FROM usuarios WHERE matricula = '$matricula' AND senha = '$senha'";
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
               $confsenha = $row['confsenha'];
              }
              if ($perfil == 'administrador') {

                $_SESSION['idUsuario'] = $idUsuario;
                $_SESSION['matricula'] = $matricula;
                $_SESSION['nome'] = $nome;
                $_SESSION['perfil'] = $perfil;
                $_SESSION['senha'] = $senha;
                $_SESSION['confsenha'] = $confsenha;
                // $_SESSION['confsenha'] = $confsenha
                header('Location: areaadm.php');
                exit;
              } else if ($perfil == 'agente'){
                $_SESSION['idUsuario'] = $idUsuario;
                $_SESSION['matricula'] = $matricula;
                $_SESSION['nome'] = $nome;
                $_SESSION['perfil'] = $perfil;
                $_SESSION['senha'] = $senha;
                $_SESSION['confsenha'] = $confsenha;
                // $_SESSION['confsenha'] = $confsenha
                header('Location: areaagente.php');
                exit;
              }
            }
          }
    }


  ?>
      <!-- Fim do codigo validação usuario -->

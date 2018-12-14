
<!-- verificação de usuario -->
<?php
//Conecção com Banco
  include 'conexao.inc.php';
  include 'validarlogin.inc.php';

  SESSION_START();
  $idUsuario = $_SESSION['idUsuario'];
  $nome = $_SESSION['nome'];
  $perfil = $_SESSION['perfil'];
  $matricula = $_SESSION['matricula'];
  $senha = $_SESSION['matricula'];
  

  if (!isset($matricula) && !isset($senha)) {
    header('Location: index.php');
    exit;
  }
?>
    <!-- Fim do codigo verificação de usuario -->
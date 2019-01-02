<?php

  include 'conexao.inc.php';//conexao com o banco

      // trazendo sessão
     $nome_obr_sessao = $_SESSION['nome_obr'];

   $sql = "SELECT * FROM obreiros WHERE  nome_obr ='". $nome_obr_sessao ."'";
   $result = $conexao->query($sql);

   if($result->num_rows > 0){
    while($row = $result->fetch_assoc())
    {
      // Pegando nome e perfil do obreiro
      $nome_obr = $row['nome_obr'];
      $tipocargo_obr = $row['tipocargo_obr'];
     }
   }
   else{
      echo "Sem Usuário";
   }

   // include '../includes/validar_login.inc.php';//
   // "SELECT * FROM obreiros WHERE nome_obr ='". $_SESSION['nome_obr']."'";

?>

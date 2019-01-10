<?php
//Conexão com Banco
  	include 'includes/conexao.inc.php';
    // SESSION_START();


 
  $cep_end_igj = $_POST['cep_end'];
  $estado_end_igj = $_POST['estado_end'];
  $cidade_end_igj = $_POST['cidade_end'];
  $bairro_end_igj = $_POST['bairro_end'];
  $rua_end_igj = $_POST['rua_end'];
  $numero_end_igj = $_POST['numero_end'];
  $complemento_end_igj = $_POST['complemento_end'];



  $sql_end_igj = "SELECT * FROM endereco_igreja";
  $result_end_igj = $conexao->query($sql_end_igj);

 
      $grava_end_igj = "INSERT INTO endereco_igreja (  cep_end_igj , estado_end_igj, cidade_end_igj, bairro_end_igj, rua_end_igj, numero_end_igj, complemento_end_igj)
      VALUES ('$cep_end_igj', '$estado_end_igj', '$cidade_end_igj','$bairro_end_igj','$rua_end_igj','$numero_end_igj','$complemento_end_igj')";
      $gravando_end_igj = $conexao->query($grava_end_igj);

	 header("Location: administrativo.php?link=8.php");

?>

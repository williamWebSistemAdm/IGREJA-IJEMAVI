<?php
//Conexão com Banco
  	include 'includes/conexao.inc.php';
    // SESSION_START();


  $dia_culto_dom = $_POST['dia_culto_dom'];
  $local_dom = $_POST['local_dom'];
  $tema_dom = $_POST['tema_dom'];
  $hora_dom = $_POST['hora_dom'];
 // CONTINUAR .... .... ... 


  $sql_dia_culto = "SELECT * FROM dia_culto";
  $result_dia_culto = $conexao->query($sql_dia_culto);

 
      $grava_dia_culto = "INSERT INTO dia_culto (  dia_culto_dom , local_culto, nome_culto, hora_culto)
      VALUES ('$dia_culto_dom', '$local_dom', '$tema_dom','$hora_dom')";
      $gravando_dia_culto = $conexao->query($grava_dia_culto);

	 header("Location: administrativo.php?link=9.php");

?>

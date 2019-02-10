<?php

 //  $nome_obr = 'William';
 //  $titulo = 'Titulo do Email';
 //  $mensagem = 'Mensagem do Email';
	// $email_obr = 'williampalmas2015@hotmail.com';
 //  $destinat = 'alexandreomagno@hotmail.com';
  
  $headers = 'MIME-Version: 1.0'. "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
  $headers .= 'To: William <williampalmas2015@hotmail.com>'. "\r\n";
  $headers .= 'From: <rw_nascimento@yahoo.com.br>'. "\r\n";
  $headers .= 'Reply-To: <rw_nascimento@yahoo.com.br>'. "\r\n";
 


  mail('williampalmas2015@hotmail.com', 'Titulo do Email', 'Mensagem do Email', $headers );

   // mail($destinat, $titulo, $mensagem, $nome_obr, $email_obr);

?>
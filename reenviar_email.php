
<?php

  $id_obr = $_POST['id_obreiros'];

  $nome_obr = $_POST['nome_obr'];
  $senha_obr = $_POST['senha_obr'];
  $email_obr = $_POST['email_obr'];


// Enviar email com a senha

// if($email_obr !=''){

  $assunto = "Dados de acesso ao Site da Igreja IJEMAVi";
  $mensagem = "<strong>Esta é sua senha de acesso ao site da igreja IJEMAVI<br><br>Você precisará do Email e da senha para acessar o site.</strong><br><br><strong>Nome: </strong> $nome_obr <br><br><em>Dados para acesso</em><br><br><strong>Usuário: </strong>É o seu próprio Email; $email_obr <br><strong>Senha de acesso: </strong> $senha_obr";
  

  $headers = 'MIME-Version: 1.0'. "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8'. "\r\n";
  $headers .= 'To: William <'.$email_obr.'>'. "\r\n";
  $headers .= 'From: <contato@igrejaijemavi.com.br>'. "\r\n";
  $headers .= 'Reply-To: <contato@igrejaijemavi.com.br>'. "\r\n";
 
  mail($email_obr, $assunto, $mensagem, $headers);

// ----------------------------------------

//   if(){

//     echo "<script>alert('Dados enviados com sucesso!.'); window.location.href='administrativo.php?link=2&id_obreiros=".$id_obr."';</script>";

//   }else {

//     echo "<script>alert('Erro ao enviar Dados, cofira o email OU digite outro diferente.'); window.location.href='administrativo.php?link=23&id_obreiros=".$id_obr."';</script>";

//   }

// }else{
//   echo "<script>alert('Seu ID de usuário não foi reconhecido, SAIA DA ÁREA ADMINISTRATIVA E FAÇA O LOGIN NO SITE NOVAMENTE.'); window.location.href='administrativo.php?link=23&id_obreiros=".$id_obr."';</script>";
//    }

?>

   echo "<script>alert('Dados enviados com sucesso para o Email: '.$email_obr.' !. <br>se o Email não chegou tente novamente ou digita outro Email.'); window.location.href='administrativo.php?link=2&id_obreiros='.$id_obr.'';</script>"; 


   

 

<?php
    // retirar os espaços em branco entre as variaveis
    ob_start();

    //  Se as informacoes nao existirem

    if ($_SESSION['usuario_obr'] == '' || $_SESSION['senha_obr'] == '' ){

     // Mesmo que seja vazio os dados, apaga as variaveis de sessao
         unset($_SESSION['nome_obr'],
              $_SESSION['senha_obr'],
              $_SESSION['email_obr']);

    // Apresenta Mensagem de erro
        $_SESSION['erro_login'] = "Área restrita para usuários cadastrados!";
    // Manda usuário para tela de login
        header('Location: ../restrito.php');
   }

?>

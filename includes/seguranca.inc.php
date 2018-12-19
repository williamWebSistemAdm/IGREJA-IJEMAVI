<?php

    ob_start();
    
    //  Se as informações não existirem
    if ($_SESSION['usuario_obr'] == '' || $_SESSION['tipocargo_obr'] == '' || $_SESSION['senha_obr'] == '' || $_SESSION['nome_obr'] == '' || $_SESSION['id_obreiros'] == '' ){
     
     // Mesmo que seja vazio os dados, apaga as variaveis de sessao 
         unset($_SESSION['id_obreiros'],
            $_SESSION['nome_obr'],
            $_SESSION['senha_obr'],
            $_SESSION['usuario_obr'],
            $_SESSION['tipocargo_obr']);
        
    // Apresenta Mensagem de erro
        $_SESSION['erro_login'] = "Área restrita para usuários cadastrados!";
    // Manda usuário para tela de login
        header('Location: restrito.php');

      
 
    
   }

?>
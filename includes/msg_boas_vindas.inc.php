<?php
    // Iniciando Sess�o
    session_start();
    //Conec��o com Banco
    include 'conexao.inc.php';//conex�o com o banco
    
    //mensagem de Boas Vindas
        
   //Trazendo perfil do administrador padrao e atribuindo a uma vari�vel
    $Adm_padrao = $_SESSION['tipocargo_obr'];
    $nome_adm_padrao = $_SESSION['nome_obr'];
   //Trazendo nome do pastor presidente e atribuindo a uma vari�vel
    $perfil_obr = $_SESSION['tipocargo_obr'];
    $nome_obr = $_SESSION['nome_obr'];
    
    //mensagem de Boas Vindas
    if ($adm_padrao == 'adm_padrao'){
        echo "Bem vindo ". $nome_adm_padrao ;               
    }elseif($perfil_obr == 'pr_presidente'){
        echo "Bem vindo ". $perfil_obr .$nome_obr "!";               
    }

?>
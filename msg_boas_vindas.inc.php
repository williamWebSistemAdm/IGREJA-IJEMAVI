<?php
    //Conecxao com Banco
    include 'conexao.inc.php';//conex�o com o banco
    include 'seguranca.inc.php';//seguranca
    //mensagem de Boas Vindas

   //Trazendo perfil do administrador padrao e atribuindo a uma vari�vel
    $Adm_padrao = $_SESSION['tipocargo_obr'];
    $nome_adm_padrao = $_SESSION['nome_obr'];
   //Trazendo nome do pastor presidente e atribuindo a uma vari�vel
    $perfil_obr = $_SESSION['tipocargo_obr'];
    $nome_obr = $_SESSION['nome_obr'];
    $sobrenome_obr = $_SESSION['sobrenome_obr'];

    //mensagem de Boas Vindas
    // if ($_SESSION['tipocargo_obr'] == 1){
    //     echo "Bem vindo Administrador Padrão!" ;
    // }elseif($_SESSION['tipocargo_obr'] == 2){
    //     echo "Bem vindo Pastor Presidente!";
    // }else {
    //   echo "Bem vindo Ir. ". $nome_obr;
    // }

    include 'peench_adm.php';

?>

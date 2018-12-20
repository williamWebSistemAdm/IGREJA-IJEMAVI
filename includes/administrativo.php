<?php
    // Iniciando Sessao
    session_start();
    //Conecxao com Banco
    include 'conexao.inc.php';//conexao com o banco
    include 'seguranca.inc.php';//seguranca
    // include 'msg_boas_vindas.inc.php';//mensagem de boas vindas

    // echo "Bem vindo";
    if (isset($_SESSION['Bem_vindo'])){
        echo $_SESSION['Bem_vindo'];
        // unset($_SESSION['Bem_vindo']);
    }


?>

<br>
<a href="sair.inc.php">Sair</a>

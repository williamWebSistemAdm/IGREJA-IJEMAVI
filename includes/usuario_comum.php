<?php
    // Iniciando Sess�o
    session_start();
    //Conec��o com Banco
    include 'conexao.inc.php';//conex�o com o banco
    // include 'seguranca.inc.php';//seguran�a
    // include 'msg_boas_vindas.inc.php';//mensagem de boas vindas

echo "ola usuari comom "; 

?>

<br>
<a href="sair.inc.php">Sair</a>

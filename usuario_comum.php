<?php
    // Iniciando Sess�o
    session_start();
    //Conec��o com Banco
    include 'includes/conexao.inc.php';//conex�o com o banco
    include 'includes/seguranca.inc.php';//seguran�a
    // include 'msg_boas_vindas.inc.php';//mensagem de boas vindas

echo "ola usuario comum ";

?>

<br>
<a href="includes/sair.inc.php">Sair</a>

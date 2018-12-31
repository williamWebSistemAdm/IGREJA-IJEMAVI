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


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página Asdmisnistrativa">
    <meta name="author" content="Igreja CIADSETA Taquaralto">
    <link rel="icon" href="icon/favicon.ico">

    <title>Administrativo!</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >

  </head>
  <body>
    <h1>Administrativo!</h1>

    <section id="conteudo">
  		<img src="Alternador.png" alt="alternador" title="alternador" usemap="#mapa">
  		<map name="mapa">
  			<area shape="rect" coords="77,175,155,188" href="IframeMapaImagem2.html#base" target="janela" alt="">
  			<area shape="circle" coords="116,98,15" href="IframeMapaImagem2.html#rotacaoHorario" target="janela" alt="">
  			<area shape="rect" coords="230,115,275,194" href="IframeMapaImagem2.html#bateria" target="janela" alt="">
  			<area shape="poly" coords="168,136,195,147,178,174,159,149" href="IframeMapaImagem2.html#ligacao" target="janela" alt="">
  		</map>
  		<iframe src="IframeMapaImagem2.html" name="janela" id="iframe" width="" height=""></iframe>
  	</section>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
  </body>
</html>

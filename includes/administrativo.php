﻿<?php
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

    <title>Hello, world!</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

  </head>
  <body>
    <h1>Hello, world!</h1>


    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
  </body>
</html>

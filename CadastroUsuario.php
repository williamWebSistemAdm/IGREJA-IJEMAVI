<?php

  // include 'conexao.inc.php';
  // include 'verificausuario.inc.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastro de Usuário</title>
</head>

<body>
  <?php
    // include 'header.inc.php';
  ?>

	<div>
    <div id="fundoTransparente">
        <h3>Cadastro Usuario</h3>
          <div class="container">
           <form method="post" action="cad_usuario.php">
            <div class="row">
              <div class="col-md-3">
                <label>Perfil: </label>
                <select class="form-control" name="perfil" required autofocus>
                  <option value="evangelista">Evangelista</option>
                  <option value="evangelista">Missionário(a)</option>
                  <option value="pastor">Pastor</option>
                  <option value="presbítero">Presbítero</option>
                  <option value="diacono">Diácono</option>
                  <option value="auxiliar">Auxiliar</option>
                  <option value="auxiliar">Secretário(a)</option>
                  <option value="auxiliar">Tesoureiro(a)</option>
                </select>
                </div>
                <div class="col-md-2">
                  <label>CPF:</label>
                  <input class="form-control" type="text" name="cpf" required>
                </div>
                  <div class="col-md-6">
                    <label>Nome:</label>
                    <input class="form-control" type="text" name="nome" required>
                  </div>
                </div>

                 <div class="row">
                  <div class="col-md-5 mb-3">
                    <label>E-mail:</label>
                    <input class="form-control" class="usuario" type="text" name="email" size="35" maxlength="100"  required>
                  </div>
 <!--                  <div class="col-md-4 mb-3">
                  <label>Telefone:</label><br>
                  <input class="form-control" type="text" name="telefone"><br><br>
                </div> -->

                <div class="col-md-3 mb-3">
                  <label>Senha:</label>
                  <input class="form-control" type="password" name="senha" required>
                </div>
                <div class="col-md-3 mb-3">
                  <label>Confirmação de senha:</label>
                  <input class="form-control" type="password" name="confsenha" required>
                </div>
              </div>

<!--                 <div class="row">
                <div class="col-md-3 mb-3">
                  <label>Selecione a Unidade:</label><br>
                  <select class="form-control" name="nomeUnidade" size=1>
                    <?php
                   // include 'selectUnidades.inc.php';
                    ?>
                  </select>
                </div>
                </div> -->
                <button class="btn btn-default" type="submit">Cadastrar</button>

                </form>
                </div>
            </div>
          </div>
        </div>
     </div>

<!--
      <div id="alerta">
        <div id="boxtop"></div>
        Não há nenhuma unidade cadastrada. Por favor, cadastre uma unidade primeiro.
        <button id="botao" onclick="redirect(); apagar(); ">OK</button>
      </div> -->

        <?php
          // include 'footer.php';
          // include 'verificarUnidades.inc.php';
        ?>

      </div>
    </div>





</body>
</html>

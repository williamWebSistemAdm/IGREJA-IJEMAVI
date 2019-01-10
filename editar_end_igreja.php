<?php
session_start();
    include 'includes/conexao.inc.php';
    include 'includes/seguranca.inc.php';//seguranca

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/png" href="img/logo_favicon.ico">
    <title>Cadastro de Endereço</title>
</head>

<body>
  <?php
    include 'includes/menu_adm.inc.php';
  ?>

  <div id="fundoTransparente">

      <div class="container">
        <h3>Editar Endereço</h3><br>
        <?php
             setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
             date_default_timezone_set( 'America/Sao_Paulo' );
             $dia = strftime( '%e-%m-%Y ');
             $hora = strftime( ' %T');
             echo "Data: " . $dia . "- ".$hora . "h ";
             echo "Usuário: " . $usuário ;
      ?>
          <form method="post" action="proc_cad_endereco.php">
             <div class="row">
              <h4>Editar Endereço</h4>
              <div class="col-md-3">
                <label>CEP:</label>
                <input class="form-control" type="text" name="cep_end" required>
              </div>

              <div class="col-md-2">
                <label>UF:</label>
                <select class="form-control" name="estado_end" required >
                  <option value="Tocantins">Tocantins</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>Cidade:</label>
                <select class="form-control" name="cidade_end" required >
                  <option value="">Selecione o município</option>
                  <option value="Aguiarnópolis">Aguiarnópolis</option>
                  <option value="Almas">Almas</option>
                  <option value="Ananás">Ananás</option>
                  <option value="Araguacema">Araguacema</option>
                  <option value="Araguaína">Araguaína</option>
                  <option value="Araguanã">Araguanã</option>
                  <option value="Araguatins">Araguatins</option>
                  <option value="Arraias">Arraias</option>
                  <option value="Augustinópolis">Augustinópolis</option>
                  <option value="Aurora do Tocantins">Aurora do Tocantins</option>
                  <option value="Babaçulândia">Babaçulândia</option>
                  <option value="Brejinho de Nazaré">Brejinho de Nazaré</option>
                  <option value="Caseara">Caseara</option>
                  <option value="Darcinópolis">Darcinópolis</option>
                  <option value="Dianópolis">Dianópolis</option>
                  <option value="Esperantina">Esperantina</option>
                  <option value="Filadélfia">Filadélfia</option>
                  <option value="Formoso do Araguaia">Formoso do Araguaia</option>
                  <option value="Gurupi">Gurupi</option>
                  <option value="Ipueiras">Ipueiras</option>
                  <option value="Itaguatins">Itaguatins</option>
                  <option value="Lagoa da Confusão">Lagoa da Confusão</option>
                  <option value="Lajeado">Lajeado</option>
                  <option value="Mateiros">Mateiros</option>
                  <option value="Monte do Carmo">Monte do Carmo</option>
                  <option value="Natividade">Natividade</option>
                  <option value="Novo Acordo">Novo Acordo</option>
                  <option value="Palmas" selected>Palmas</option>
                  <option value="Paraíso do Tocantins">Paraíso do Tocantins</option>
                  <option value="Paranã">Paranã</option>
                  <option value="Pau d'Arco">Pau d'Arco</option>
                  <option value="Peixe">Peixe</option>
                  <option value="Pium">Pium</option>
                  <option value="Ponte Alta do Tocantins">Ponte Alta do Tocantins</option>
                  <option value="Porto Nacional">Porto Nacional</option>
                  <option value="Praia Norte">Praia Norte</option>
                  <option value="Rio da Conceição">Rio da Conceição</option>
                  <option value="Sampaio">Sampaio</option>
                  <option value="São Bento do Tocantins">São Bento do Tocantins</option>
                  <option value="São Félix do Tocantins">São Félix do Tocantins</option>
                  <option value="São Sebastião do Tocantins">São Sebastião do Tocantins</option>
                  <option value="Taguatinga">Taguatinga</option>
                  <option value="Tocantinópolis">Tocantinópolis</option>
                  <option value="Wanderlândia">Wanderlândia</option>
                  <option value="Xambioá">Xambioá</option>
                  <option value="outra_cidade">Outros</option>
                </select>
              </div>

              <div class="col-md-4">
                <label>Bairro:</label>
                <input class="form-control" type="text" name="bairro_end" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Rua:</label>
                <input class="form-control" type="text" name="rua_end" required>
              </div>
              <div class="col-md-2">
                <label>Número:</label>
                <input class="form-control" type="text" name="numero_end" required>
              </div>
              <div class="col-md-6">
                <label>Complemento:</label>
                <input class="form-control" type="text" name="complemento_end" required>
              </div>
            </div>

            <div class="row">
            <button class="btn btn-default" type="submit">Cadastrar</button>
          </div>
        </div>
      </form>
      </div><br><br>


        </div>


        <?php
          // include 'includes/footer.inc.php';
        ?>






</body>
</html>

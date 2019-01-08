<?php
include 'includes/conexao.inc.php';//conexao com o banco
include 'includes/seguranca.inc.php';//seguranca


$id = $_GET['id_obreiros'];

// Consultar obreiros
$sql_consulta = "SELECT * FROM obreiros WHERE id_obreiros='$id' limit 1";
$result_consulta = $conexao->query($sql_consulta);
$resultado_consulta = mysqli_fetch_assoc($result_consulta);

	//Pegar o id_enderecos
	$pegar_id_enderecos = "SELECT * FROM enderecos WHERE id_end='$id' limit 1";
	$result_id_enderecos =  mysqli_query($conexao, $pegar_id_enderecos);
	while($row = mysqli_fetch_assoc($result_id_enderecos))
	{
		$id_enderecos = $row['id_end'];
		$_SESSION['id_end'] = $id_enderecos;

		$cep_end = $row['cep_end'];
		$estado_end = $row['estado_end'];
		$estado_end = $row['estado_end'];
		$cidade_end = $row['cidade_end'];
		$bairro_end = $row['bairro_end'];
		$rua_end = $row['rua_end'];
		$numero_end = $row['numero_end'];
		$complemento_end = $row['complemento_end'];
		echo "id endereço: ".$id_enderecos;
    echo "<br>";
	}

	//Pegar o  id_telefones
	$pegar_id_telefones = "SELECT * FROM telefones WHERE id_telefones='$id' limit 1";
	$result_id_telefones =  mysqli_query($conexao, $pegar_id_telefones);
	while($rowt = mysqli_fetch_assoc($result_id_telefones))
	{
		$id_telefones = $rowt['id_telefones'];
    $_SESSION['id_telefones'] = $id_telefones;

		$tel_watzap = $rowt['tel_watzap'];
		$tel_cel = $rowt['tel_cel'];
		$tel_resid = $rowt['tel_resid'];

		echo "id telefone: ".$id_telefones;
    echo "<br>";
	}

  	//Pegar o  tipocargo_obr
  	$pegar_tipocargo_obr = "SELECT * FROM tipocargo_obr WHERE id_tipocargo='$id' limit 1";
  	$result_tipocargo_obr =  mysqli_query($conexao, $pegar_tipocargo_obr);
  	while($rowc = mysqli_fetch_assoc($result_tipocargo_obr))
  	{
  		$id_tipocargo_obr = $rowc['id_tipocargo'];
      $_SESSION['id_tipocargo'] = $id_tipocargo_obr;
  		$Perfil_cargo_obr = $rowc['Perfil_cargo_obr'];
  		echo "Perfil/cargo: ".$Perfil_cargo_obr;
      echo "<br>";
  	}
?>

  <div id="fundoTransparente">

      <div class="container">
        <h3>Editar Obreiro(a)</h3><br>
        <?php
             setlocale( LC_ALL, 'pt_BR', 'pt_BR.iso-8859-1', 'pt_BR.utf-8', 'portuguese' );
             date_default_timezone_set( 'America/Sao_Paulo' );
             $dia = strftime( '%e-%m-%Y ');
             $hora = strftime( ' %T');
             echo "Dia: " . $dia . "Hora: ".$hora;
      ?>
          <form method="post" action="proc_editar_obreiro.inc.php">
             <div class="row">
              <div class="col-md-3">
                <label>Perfil/Cargo: </label>
                <select class="form-control" name="tipocargo_obr"  >
                  <option value="<?php echo $Perfil_cargo_obr; ?>" selected><?php echo $Perfil_cargo_obr; ?></option>

                  <optgroup value="pastor" label="Pastor">
                    <!-- <option value="Pastor Presidente">Pastor Presidente</option> -->

                    <option value="Pastor Dirigente Congregacional">Pastor Dirigente Congregacional</option>

                    <option value="Pastor Evangelista">Pastor Evangelista</option>
                    <option value="Pastor Missionário">Pastor Missionário</option>
                  </optgroup>

                  <option name="missionario" value="Missionário">Missionário(a)</option>
                  <option name="presbitero" value="Presbítero">Presbítero</option>
                  <option name="diacono" value="Diácono">Diácono</option>

                  <optgroup label="Cooperador(a)">
                    <option name="coop_port" value="Coop. Porteiro(a)">Porteiro(a)</option>
                    <option name="coop_secret" value="Coop. Secretário(a)">Secretário(a)</option>
                    <option name="coop_teso" value="Coop. Tesoureiro(a)">Tesoureiro(a)</option>
                    <option name="coop_auxiliar" value="Coop. Auxiliar">Auxiliar</option>
                  </optgroup>
                </select>
              </div>
              <div class="col-md-3">
                <label>Nome:</label>
                <input class="form-control" type="text" value="<?php echo $resultado_consulta['nome_obr']; ?>" name="nome_obr" >
              </div>
              <div class="col-md-6">
                <label>Sobrenome:</label>
                <input class="form-control" type="text" value="<?php echo $resultado_consulta['sobrenome_obr']; ?>"  name="sobrenome_obr" >
              </div>
            </div>

           <div class="row">
             <div class="col-md-3">
               <label>CPF:</label>
               <input class="form-control" type="text" value="<?php echo $resultado_consulta['cpf_obr']; ?>"  name="cpf_obr" >
             </div>
              <div class="col-md-5 mb-3">
                <label>E-mail:</label>
                <input class="form-control" type="text" value="<?php echo $resultado_consulta['email_obr']; ?>"  name="email_obr" size="35" maxlength="100" >
              </div>
              <div class="col-md-2">
                <label>Data Nascimento:</label>
                <input class="form-control" type="date" value="<?php echo $resultado_consulta['nascimento_obr']; ?>"  name="nascimento_obr" >
              </div>
              <div class="col-md-2">
                <label>sexo:</label>
                <select class="form-control" type="text" value="<?php echo $resultado_consulta['sexo_obr']; ?>"  name="sexo_obr" >
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                </select>
              </div>

              <div class="col-md-2">
                <label>Celular:</label>
                <input class="form-control" type="text" value="<?php echo $tel_cel; ?>"  name="tel_cel">
              </div>
              <div class="col-md-2">
                <label>WatZap:</label>
                <input class="form-control" type="text" value="<?php echo $tel_watzap; ?>"  name="tel_watzap">
              </div>
              <div class="col-md-2">
                <label>Telefone Residencial:</label>
                <input class="form-control" type="text" value="<?php echo $tel_resid; ?>"  name="tel_resid">
              </div>
            </div>

            <h4>Endereço</h4>
             <div class="row">
              <div class="col-md-3">
                <label>CEP:</label>
                <input class="form-control" type="text" value="<?php echo $cep_end; ?>"  name="cep_end" >
              </div>

              <div class="col-md-2">
                <label>UF:</label>
                <select class="form-control" value="<?php echo $estado_end; ?>"  name="estado_end"  >
                  <option value="Tocantins">Tocantins</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>Cidade:</label>
                <select class="form-control" name="cidade_end" >
                  <option value="<?php echo $cidade_end; ?>"><?php echo $cidade_end; ?></option>
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
                  <option value="Palmas">Palmas</option>
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
                <input class="form-control" type="text" value="<?php echo $bairro_end; ?>"  name="bairro_end" >
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label>Rua:</label>
                <input class="form-control" type="text" value="<?php echo $rua_end; ?>"  name="rua_end" >
              </div>
              <div class="col-md-2">
                <label>Número:</label>
                <input class="form-control" type="text" value="<?php echo $numero_end; ?>"  name="numero_end" >
              </div>
              <div class="col-md-6">
                <label>Complemento:</label>
                <input class="form-control" type="text" value="<?php echo $complemento_end; ?>"  name="complemento_end" >
              </div>
            </div>

            <input  type="hidden" value="<?php echo $resultado_consulta['id_obreiros']; ?>"  name="id_obreiros" >

            <h4>Escolha a Senha de Usuário</h4>
             <div class="row">
              <div class="col-md-3">
                <label>Senha:</label>
                <input class="form-control" type="password" value="<?php echo $resultado_consulta['senha_obr']; ?>"  name="senha_obr" >
              </div>
              <div class="col-md-3">
                <label>Confirmação de senha:</label>
                <input class="form-control" type="password" name="confsenha_obr" required>
              </div>
            </div>
            <br>
            <div class="row">
            <button class="btn btn-default" type="submit">Atualizar</button>
          </div>
        </div>
      </form>
      </div><br><br>

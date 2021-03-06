<?php include 'seguranca.inc.php';//seguranca  ?>
<br>
	<div class="text-center"><h3>Cadastro de Obreiros(as)</h3></div>
	<div class="text-right">
		<a href="administrativo.php?link=1" ><button type="button" class="btn btn-sm btn-info">listar</button></a>
	</div>

      <form method="post" action="proc_cad_obreiro.php">
         <div class="row">
          <div class="col-md-3">
            <label>Perfil/Cargo: </label>
            <select class="form-control" name="tipocargo_obr" required autofocus>
              <optgroup value="pastor" label="Pastor">
                <option value="Pastor Dirigente Congregacional">Pastor Dirigente Congregacional</option>
                <option value="Pastor Evangelista">Pastor Evangelista</option>
                <option value="Pastor Missionário">Pastor Missionário</option>
              </optgroup>

              <option name="missionario" value="Missionário(a)" >Missionário(a)</option>
              <option name="presbitero" value="Presbítero" selected>Presbítero</option>
              <option name="diacono" value="Diácono">Diácono</option>

              <optgroup label="Cooperador(a)">
                <option name="coop_port" value="Porteiro(a)">Porteiro(a)</option>
                <option name="coop_secret" value="Secretário(a)">Secretário(a)</option>
                <option name="coop_teso" value="Tesoureiro(a)">Tesoureiro(a)</option>
                <option name="coop_auxiliar" value="Auxiliar">Auxiliar</option>
              </optgroup>
            </select>
          </div>
          <div class="col-md-3">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome_obr" required>
          </div>
          <div class="col-md-6">
            <label>Sobrenome:</label>
            <input class="form-control" type="text" name="sobrenome_obr" required>
          </div>
        </div>

       <div class="row">
         <div class="col-md-3">
           <label>CPF:</label>
           <input class="form-control" type="text" name="cpf_obr" required>
         </div>
          <div class="col-md-5 mb-3">
            <label>E-mail:</label>
            <input class="form-control" type="text" name="email_obr" size="35" maxlength="100"  required>
          </div>
          <div class="col-md-2">
            <label>Data Nascimento:</label>
            <input class="form-control" type="date" name="nascimento_obr" required>
          </div>
          <div class="col-md-2">
            <label>sexo:</label>
            <select class="form-control" type="text" name="sexo_obr" required>
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
            </select>
          </div>

          <div class="col-md-4">
            <label>Celular:</label>
            <input class="form-control" type="text" name="tel_cel">
          </div>
          <div class="col-md-4">
            <label>WatZap:</label>
            <input class="form-control" type="text" name="tel_watzap">
          </div>
          <div class="col-md-4">
            <label>Telefone Residencial:</label>
            <input class="form-control" type="text" name="tel_resid">
          </div>
        </div><br>

        <h4>Endereço</h4>
         <div class="row">
          <div class="col-md-2">
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

          <div class="col-md-2">
            <label>Bairro:</label>
            <input class="form-control" type="text" name="bairro_end" required>
          </div>
          <div class="col-md-3">
            <label>Rua:</label>
            <input class="form-control" type="text" name="rua_end" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <label>Número:</label>
            <input class="form-control" type="text" name="numero_end" required>
          </div>
          <div class="col-md-10">
            <label>Complemento:</label>
            <input class="form-control" type="text" name="complemento_end" required>
          </div>
        </div><br>

        <h4>Escolha a Senha de Usuário</h4>
         <div class="row">
          <div class="col-md-3">
            <label>Senha:</label>
            <input class="form-control" type="password" name="senha_obr" required>
          </div>
          <div class="col-md-3">
            <label>Confirmação de senha:</label>
            <input class="form-control" type="password" name="confsenha_obr" required>
          </div>
        </div>
        <br>
        <div>
        <button class="btn btn-primary" type="submit">Cadastrar</button>
      </div>
    </form><br><br><br><br><br><br><br>

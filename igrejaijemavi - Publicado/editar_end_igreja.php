<?php
// Pegando dados para exibir nos inputs
$sql_end_igj = "SELECT * FROM endereco_igreja";
$result_end_igj = $conexao->query($sql_end_igj );
while($row = mysqli_fetch_assoc($result_end_igj))
{
	$cep_end_igj = $row['cep_end_igj'];
	$estado_end_igj = $row['estado_end_igj'];
	$cidade_end_igj = $row['cidade_end_igj'];
	$bairro_end_igj = $row['bairro_end_igj'];
	$rua_end_igj = $row['rua_end_igj'];
	$numero_end_igj = $row['numero_end_igj'];
	$complemento_end_igj = $row['complemento_end_igj'];
}

?>


<br>
<div class="container">
  <form method="post" action="proc_editar_end_igj.php">
		<div class="text-center"><h3>Editar Localização da Igreja</h3></div>
		<div class="text-right">
      <a href="administrativo.php"><button type="button" class="btn btn-sm btn-info">Voltar</button></a>
		</div>
      <div class="row">
      <div class="col-md-3">
        <label>CEP:</label>
        <input class="form-control" type="text" name="cep_end_igj" value="<?php echo $cep_end_igj; ?>" >
      </div>

      <div class="col-md-2">
        <label>UF:</label>
        <select class="form-control" name="estado_end_igj" value="<?php echo $estado_end_igj; ?>">
          <option value="Tocantins">Tocantins</option>
        </select>
      </div>
      <div class="col-md-3">
        <label>Cidade:</label>
        <select class="form-control" name="cidade_end_igj" value="<?php echo $cidade_end_igj; ?>">
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
        <input class="form-control" type="text" name="bairro_end_igj" value="<?php echo $bairro_end_igj; ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <label>Rua:</label>
        <input class="form-control" type="text" name="rua_end_igj" value="<?php echo $rua_end_igj; ?>">
      </div>
      <div class="col-md-2">
        <label>Número:</label>
        <input class="form-control" type="text" name="numero_end_igj" value="<?php echo $numero_end_igj; ?>">
      </div>
      <div class="col-md-6">
        <label>Complemento:</label>
        <input class="form-control" type="text" name="complemento_end_igj" value="<?php echo $complemento_end_igj; ?>">
      </div>
    </div><br>

      <button class="btn btn-primary" type="submit">Atualizar</button>
  </form>
</div>

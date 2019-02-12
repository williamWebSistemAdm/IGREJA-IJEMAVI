<?php
include 'conexao.inc.php';//conexao com o banco
include 'seguranca.inc.php';//seguranca

$id = $_GET['id_obreiros'];

// Consultar obreiros
$sql_consulta = "SELECT * FROM obreiros WHERE id_obreiros='$id' limit 1";
$result_consulta = $conexao->query($sql_consulta);
$resultado_consulta = mysqli_fetch_assoc($result_consulta);


  	// Pegar o  tipocargo_obr
  	$pegar_tipocargo_obr = "SELECT * FROM tipocargo_obr WHERE id_tipocargo='$id' limit 1";
  	$result_tipocargo_obr =  mysqli_query($conexao, $pegar_tipocargo_obr);
  	while($rowc = mysqli_fetch_assoc($result_tipocargo_obr))
  	{
  		$id_tipocargo_obr = $rowc['id_tipocargo'];
      $_SESSION['id_tipocargo'] = $id_tipocargo_obr;
  		$Perfil_cargo_obr = $rowc['Perfil_cargo_obr'];
  	}
?>
<br><br><h4 class="text-center">Dados de acesso a Área Administrativa do Site IJEMAVI </h4><br>
  <form  method="post" action="reenviar_email.php">
     <div class="row">
        <div class="col-md-7">
          <label>Nome:</label>
          <input class="form-control" type="text" value="<?php echo $resultado_consulta['nome_obr']; ?><?php echo ' '; ?><?php echo $resultado_consulta['sobrenome_obr']; ?>" name="nome_obr" >
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-7">
          <label>E-mail:</label><br>
          <label>* Caso queira enviar para outro E-mail DIGITE NA CAIXA ABAIXO:</label>
          <input class="form-control" type="text" value="<?php echo $resultado_consulta['email_obr']; ?>"  name="email_obr" size="35" maxlength="100" >
        </div>      
        </div><br>    
      <div class="row">
        <div class="col-md-3">
          <label>Senha:</label>
          <input class="form-control" type="password" value="<?php echo $resultado_consulta['senha_obr']; ?>"  name="senha_obr" >
        </div>      
      </div>
    <br><br><h6 class="text-center">* Appós enviar os dados, olhe a <em>CAIXA DE ENTRADA<em> do seu Email. Caso não esteja lá, procure no <em>SPAM ou LIXO ELETRÔNICO<em> </h6><br>
      <input type="hidden" name="id_obreiros" value="<?php echo $id; ?>" />
    <div class="text-right">
    <button type="submit" class="btn btn-sm btn-info">Renviar dados de acesso ao Email</button>
  </div>
</form><br><br><br><br><br><br><br>

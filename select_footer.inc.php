<?php
	include 'conexao.inc.php';//conexao com o banco

	$sql_end_igj = "SELECT * FROM endereco_igreja";
	$result_end_igj = $conexao->query($sql_end_igj );
	while($row = $result_end_igj->fetch_assoc())
	{
		$id_end_igj = $row['id_end_igj'];
		$cep_end_igj = $row['cep_end_igj'];
		$estado_end_igj = $row['estado_end_igj'];
		$cidade_end_igj = $row['cidade_end_igj'];
		$bairro_end_igj = 	$row['bairro_end_igj'];
		$rua_end_igj = 	$row['rua_end_igj'];
		$numero_end_igj = 	$row['numero_end_igj'];
		$complemento_end_igj = 	$row['complemento_end_igj'];
	}
	// Pegar email
$sql_consulta = "SELECT * FROM obreiros where id_obreiros=2";
$result_consulta = $conexao->query($sql_consulta);
while($row = mysqli_fetch_assoc($result_consulta))
{
	$email_obr = $row['email_obr'];
}
	// Pegar telefone
$pegar_telefone = "SELECT * FROM telefones where id_telefones=2";
$result_telefone =  mysqli_query($conexao, $pegar_telefone);
while($rowt = mysqli_fetch_assoc($result_telefone))
	{
		$tel_cel = $rowt['tel_cel'];
	}

?>
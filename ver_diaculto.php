<?php

	include 'includes/conexao.inc.php';//Conexão com Banco

  $sql_dia_dom  = "SELECT * FROM dia_culto  WHERE id_dia_culto=1 LIMIT 1";  $result_dia_dom  = $conexao->query($sql_dia_dom );
  while($row = $result_dia_dom->fetch_assoc())
  {  $id_dom= $row['id_dia_culto'];  $local_dom = $row['local_culto']; $tema_dom = $row['nome_culto'];   $hora_dom = $row['hora_culto'];  }

  $sql_dia_seg  = "SELECT * FROM dia_culto  WHERE id_dia_culto=2 LIMIT 1";  $result_dia_seg = $conexao->query($sql_dia_seg );
  while($row = $result_dia_seg->fetch_assoc())
  {  $id_seg = $row['id_dia_culto'];  $local_seg = $row['local_culto'];   $tema_seg = $row['nome_culto'];   $hora_seg = $row['hora_culto'];  }

  $sql_dia_ter  = "SELECT * FROM dia_culto  WHERE id_dia_culto=3 LIMIT 1";  $result_dia_ter  = $conexao->query($sql_dia_ter );
  while($row = $result_dia_ter->fetch_assoc())
  {  $id_ter = $row['id_dia_culto'];  $local_ter = $row['local_culto'];   $tema_ter = $row['nome_culto'];   $hora_ter = $row['hora_culto'];  }

  $sql_dia_qua  = "SELECT * FROM dia_culto  WHERE id_dia_culto=4 LIMIT 1";  $result_dia_qua  = $conexao->query($sql_dia_qua );
  while($row = $result_dia_qua->fetch_assoc())
  {  $id_qua = $row['id_dia_culto'];  $local_qua = $row['local_culto'];   $tema_qua = $row['nome_culto'];   $hora_qua = $row['hora_culto'];  }

  $sql_dia_qui  = "SELECT * FROM dia_culto  WHERE id_dia_culto=5 LIMIT 1";  $result_dia_qui  = $conexao->query($sql_dia_qui );
  while($row = $result_dia_qui->fetch_assoc())
  {  $id_qui = $row['id_dia_culto'];  $local_qui = $row['local_culto'];   $tema_qui = $row['nome_culto'];   $hora_qui = $row['hora_culto'];  }

  $sql_dia_sex  = "SELECT * FROM dia_culto  WHERE id_dia_culto=6 LIMIT 1";  $result_dia_sex  = $conexao->query($sql_dia_sex );
  while($row = $result_dia_sex->fetch_assoc())
  {  $id_sex = $row['id_dia_culto'];  $local_sex = $row['local_culto'];   $tema_sex = $row['nome_culto'];   $hora_sex = $row['hora_culto'];  }

  $sql_dia_sab  = "SELECT * FROM dia_culto  WHERE id_dia_culto=7 LIMIT 1";  $result_dia_sab  = $conexao->query($sql_dia_sab );
  while($row = $result_dia_sab->fetch_assoc())
  {  $id_sab = $row['id_dia_culto'];  $local_sab = $row['local_culto'];   $tema_sab = $row['nome_culto'];   $hora_sab = $row['hora_culto'];  }

?>
<br>
<div class="text-center "><h3>Dias de Culto</h3></div>

<div class="text-right">
  <a href="administrativo.php"><button type="button" class="btn btn-sm btn-info">Voltar</button></a>
	<a href="administrativo.php?link=19" ><button type="button" class="btn btn-sm btn-warning">Editar</button></a>
</div>
<table class="table table-hover table-striped col-12">
  <tbody>
    <tr><th scope="row" class="text-center table-dark">Domingo</th><td class="table-dark"></td></tr>
    <tr><th scope="row">Local:</th><td><?php echo $local_dom ; ?></td></tr>
    <tr><th scope="row">Tema do culto:</th><td><?php echo $tema_dom ; ?></td></tr>
    <tr><th scope="row">Hora:</th><td><?php echo $hora_dom; ?></td></tr>
    <tr><th scope="row"></th><td></td></tr>
    <tr><th scope="row" class="text-center table-dark">Segunda</th><td class="table-dark"></td></tr>
    <tr><th scope="row">Local:</th><td><?php echo $local_seg ; ?></td></tr>
    <tr><th scope="row">Tema do culto:</th><td><?php echo $tema_seg ; ?></td></tr>
    <tr><th scope="row">Hora:</th><td><?php echo $hora_seg; ?></td></tr>
    <tr><th scope="row"></th><td></td></tr>
    <tr><th scope="row" class="text-center table-dark">Terça</th><td class="table-dark"></td></tr>
    <tr><th scope="row">Local:</th><td><?php echo $local_ter ; ?></td></tr>
    <tr><th scope="row">Tema do culto:</th><td><?php echo $tema_ter ; ?></td></tr>
    <tr><th scope="row">Hora:</th><td><?php echo $hora_ter; ?></td></tr>
    <tr><th scope="row"></th><td></td></tr>
    <tr><th scope="row" class="text-center table-dark">Quarta</th><td class="table-dark"></td></tr>
    <tr><th scope="row">Local:</th><td><?php echo $local_qua ; ?></td></tr>
    <tr><th scope="row">Tema do culto:</th><td><?php echo $tema_qua ; ?></td></tr>
    <tr><th scope="row">Hora:</th><td><?php echo $hora_qua; ?></td></tr>
    <tr><th scope="row"></th><td></td></tr>
    <tr><th scope="row" class="text-center table-dark">Quinta</th><td class="table-dark"></td></tr>
    <tr><th scope="row">Local:</th><td><?php echo $local_qui ; ?></td></tr>
    <tr><th scope="row">Tema do culto:</th><td><?php echo $tema_qui ; ?></td></tr>
    <tr><th scope="row">Hora:</th><td><?php echo $hora_qui ; ?></td></tr>
    <tr><th scope="row"></th><td></td></tr>
    <tr><th scope="row" class="text-center table-dark">Sexta</th><td class="table-dark"></td></tr>
    <tr><th scope="row">Local:</th><td><?php echo $local_sex ; ?></td></tr>
    <tr><th scope="row">Tema do culto:</th><td><?php echo $tema_sex ; ?></td></tr>
    <tr><th scope="row">Hora:</th><td><?php echo $hora_sex ; ?></td></tr>
    <tr><th scope="row"></th><td></td></tr>
    <tr><th scope="row" class="text-center table-dark">Sabado</th><td class="table-dark"></td></tr>
    <tr><th scope="row">Local:</th><td><?php echo $local_sab ; ?></td></tr>
    <tr><th scope="row">Tema do culto:</th><td><?php echo $tema_sab ; ?></td></tr>
    <tr><th scope="row">Hora:</th><td><?php echo $hora_sab ; ?></td></tr>
    <tr><th scope="row"></th><td></td></tr>
  </tbody>
</table>
<div class="text-right">
	<a href="administrativo.php?link=19" ><button type="button" class="btn btn-sm btn-warning">Editar</button></a>
</div>

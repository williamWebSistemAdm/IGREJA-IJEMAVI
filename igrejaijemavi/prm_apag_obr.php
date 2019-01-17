<?php
$id_obr = $_GET['id_obreiros'];

echo "<script>
		var resposta = confirm('Tem certeza que deseja APAGAR o usuário?');
		if(resposta)
		{
			location.href='proc_apagar_obr.php?id_obreiros="?><?php echo $id_obr; ?><?php"';
		} else {
			location.href='administrativo.php?link=1';
		}
	</script>";

	 ?>

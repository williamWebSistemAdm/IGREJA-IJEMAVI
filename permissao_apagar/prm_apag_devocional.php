<?php
$id_dev = $_GET['id_devocional'];

echo "<script>
		var resposta = confirm('Tem certeza que deseja APAGAR o devocional?');
		if(resposta)
		{
			location.href='../proc_apagar_devocional.php?id_devocional="?><?php echo $id_dev; ?><?php"';
		} else {
			location.href='../administrativo.php?link=6';
		}
	</script>";

	 ?>

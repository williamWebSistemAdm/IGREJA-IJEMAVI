<?php
$id_banner = $_GET['id'];

echo "<script>
		var resposta = confirm('Tem certeza que deseja APAGAR o banner?');
		if(resposta)
		{
			location.href='../proc_apagar_banner.php?id="?><?php echo $id_banner; ?><?php"';
		} else {
			location.href='../administrativo.php?link=10';
		}
	</script>";

	 ?>

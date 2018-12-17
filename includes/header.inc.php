<div id="header">
	<div class="container-fluid">
		<div class="row">	
			<div class="col-4">
				<?php
					if ($_SESSION['perfil'] == 'agente'){
					echo "<a href='areaagente.php'><img class='menuicon' src='img/logoagente.png'></a>";
					}	
					else if ($_SESSION['perfil'] == 'administrador') {	
					echo "<a href='areaadm.php'><img class='menuicon' src='img/logoadm.png'></a>";	 
					}	
				?>
			</div>

			<div class="col-8">
				<div id="menu">
					<?php
						if ($_SESSION['perfil'] == 'agente'){
						include 'menuagente.php';
						}	

						else if ($_SESSION['perfil'] == 'administrador') {	
						include 'menuadm.php'; 
						}	
					?>		    	
				      	
				</div>
			</div>
		</div>
	</div>
	<a id="logout" href="logout.php">Log out<img src="img/logout.png" alt="Logout"></a>
</div>

		<!-- Fim do Menu Provisório  -->

		<!-- <form  id="divBusca" class="form" action="" method="get">
		<input type="text" name="filtro" id="txtBusca" placeholder="Pesquisar..."/>
		<button type="submit" id="btnBusca"><img src="img/icon pesquisa.png" alt="Buscar..."/></button>
		</form> -->

	


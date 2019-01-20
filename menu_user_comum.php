<?php include 'seguranca.inc.php';//seguranca ?>
	<header id="header">

		<nav class="navbar navbar-expand-lg  navbar-light bg-primary" >
		  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
			<a class="logo" href="administrativo.php"> <img src="img/logo.png" alt="logo IJEMAVI"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<label class="link">Usuários</label>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="administrativo.php?link=1">Listar</a>
							<a class="dropdown-item" href="administrativo.php?link=3">Cadastrar</a>
							<!-- <div class="dropdown-divider"></div> -->
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<label class="link">Devocional</label>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="administrativo.php?link=6">listar</a>
							<a class="dropdown-item" href="administrativo.php?link=7">Adicionar</a>
							<!-- <a class="dropdown-item" href="administrativo.php?link=8">Editar</a> -->
							<!-- <div class="dropdown-divider"></div> -->
							<a class="dropdown-item" href="administrativo.php?link=9">Excluir</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<label class="link">Banner</label>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="administrativo.php?link=10">listar</a>
							<a class="dropdown-item" href="administrativo.php?link=11">Adicionar</a>
							<!-- <a class="dropdown-item" href="administrativo.php?link=1">Editar</a> -->
							<!-- <div class="dropdown-divider"></div> -->
							<a class="dropdown-item" href="administrativo.php?link=12">Desativar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<label class="link">Imagens</label>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="administrativo.php?link=13">listar</a>
							<a class="dropdown-item" href="administrativo.php?link=14">Adicionar</a>
							<!-- <a class="dropdown-item" href="administrativo.php?link=1">Editar</a> -->
							<!-- <div class="dropdown-divider"></div> -->
							<a class="dropdown-item" href="administrativo.php?link=15">Desativar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<label class="link">Localização</label>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="administrativo.php?link=16">Visualizar</a>
							<a class="dropdown-item" href="administrativo.php?link=17">Editar</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<label class="link">Dia de Culto</label>
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							 <a class="dropdown-item" href="administrativo.php?link=18">Visualizar</a>
							 <a class="dropdown-item" href="administrativo.php?link=19">Editar</a>

						</div>
					</li>



		    </ul>

		  </div>
			<div class="text-right">
				<a href="sair.inc.php" ><button type="button" class="btn btn-sm btn-danger"> Sair </button></a>
			</div>
		</nav>

		<!-- <a id="logout" href="logout.php">Log out<img src="img/logout.png" alt="Logout"></a> -->
	</header >

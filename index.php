<?php
	include 'includes/conexao.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="IJEMAVI - Igreja de Jesus Manacial de Águas Vivas, ijemavi">
	<meta name="keywords" content="Igreja, Jesus, Manancial, Águas, Vivas, Pastor, Família, Adoradores, IJEMAVI, ijemavi">
	<meta name="author" content="José Ribeiro">
	<meta http-equiv="refresh" content="300">
	<title>IJEMAVI- Igreja de Jesus Manancial de Águas Vivas</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
  <link href="css/personalizado.css" rel="stylesheet">
	<!-- <link href="css/bootstrap7.css" rel="stylesheet"> -->
</head>

<body>
	<header id="header">
		<!-- Inicio Menu -->
		 <nav class="navbar navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
					<a class="logo" href="index.html"> <img src="img/logo.png" alt="IJEMAVI"></a>
				</div>
						<div class="collapse navbar-collapse navbar-right">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#header">Home</a></li>
								<li><a href="#gallery">Galeria</a></li>
								<li><a href="#our-team">Nossa Equipe</a></li>
								<li><a href="#contact">Contatos</a></li>
							</ul>
						</div>
					</div>

        </nav>
        <!-- Fim Menu -->

<br>
				<?php
					include 'carroussel/carroussel.php';
					?>

	</header>
	<hr>


	<!--/header-->
	<!-- <div class="slider">
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">

				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="img/banner.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
								<h2><span>IJEMAVI- Igreja de Jesus Manancial de Águas Vivas</span></h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
								<p>Uma Família de Adoradores</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
								<form class="form-inline">
									<div class="form-group">
										<a href="https://www.facebook.com/IJEMAVI/"><img id="facebook" src="img/s1.png" alt="Facebook"></a>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="item">
						<img src="img/banner2.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
								<h2>Ceia do Senhor</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">
								<p>Instituição da Ceia do Senhor</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
								<form class="form-inline">
									<div class="form-group">
										<a type="livedemo" href="https://www.facebook.com/IJEMAVI/"><img id="facebook" src="img/s1.png" alt="Facebook"></a>

									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="img/banner1.jpg" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
								<h2>O Universo Declara Deus</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
								<p>Obra de Tuas Mãos</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
								<form class="form-inline">
									<div class="form-group">
										<a type="livedemo" href="https://www.facebook.com/IJEMAVI/"><img id="facebook" src="img/s1.png" alt="Facebook"></a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

				<a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>

		</div>

	</div> -->


	<!-- <hr> -->

	<div id="gallery">
		<div class="container">
			<div class="text-center">
				<h3>Galeria</h3>
				<p>Nossos Momentos</p>
			</div>
			<!-- <div class="row"> -->
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="img/work/1.jpg" class="flipLightBox">
						<img src="img/work/1.jpg" class="img-responsive" alt="">
						</a>
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="img/work/2.jpg" class="flipLightBox">
						<img src="img/work/2.jpg" class="img-responsive" alt="">
						</a>
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="img/work/3.jpg" class="flipLightBox">
						<img src="img/work/3.jpg" class="img-responsive" alt="">
						</a>
					</div>
				</figure>
				<figure class="effect-chico">
					<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
						<a href="img/work/4.jpg" class="flipLightBox">
						<img src="img/work/4.jpg" class="img-responsive" alt="">
						</a>
					</div>
				</figure>
			<!-- </div> -->
			<br>


				<!-- <div class="row"> -->
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/work/5.jpg" class="flipLightBox">
							<img src="img/work/5.jpg" class="img-responsive" alt="">
							</a>
						</div>
					</figure>
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/work/6.jpg" class="flipLightBox">
							<img src="img/work/6.jpg" class="img-responsive" alt="">
							</a>
						</div>
					</figure>
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/work/7.jpg" class="flipLightBox">
							<img src="img/work/7.jpg" class="img-responsive" alt="">
							</a>
						</div>
					</figure>
					<figure class="effect-chico">
						<div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s">
							<a href="img/work/8.jpg" class="flipLightBox">
							<img src="img/work/8.jpg" class="img-responsive" alt="">
							</a>
						</div>
					</figure>
				</div>
			</div>
			<!-- </div> -->

	<!--/#gallery-->

	<hr>

	<div id="our-team">
		<div class="container">
			<div class="text-center">
				<h3>Nossos Obreiros</h3>
				<p>Cooperadores da Obra de Deus</p>
			</div>
			<div class="row">
				<div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="img/team/Jose.jpg" alt="">
						<h2>José Ribeiro</h2>
						<h4>Pr. Presidente<a href="sobrePr.html"> - Conheça Melhor</a> </h4>.
						<p>Fundador da Igreja de Jesus Manancial de Águas Vivas</p>
					</div>
				</div>
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="img/team/Debora.jpg" alt="">
						<h2>Débora Alves</h2>
						<h4>Vice-Presidente</h4>
						<p>Cooperadora que abraçou a causa do Mestre Jesus</p>
					</div>
				</div>
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="img/team/Hilda.jpg" alt="">
						<h2>Hilda Alves</h2>
						<h4>Esposa do Pr. Presidente</h4>
						<p>Fel Companeira que acompanhou por todos esses anos</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="text-center">
				<p>Equipe de Apoio</p>
			</div>
			<div class="row">
				<div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="img/team/user.png" alt="">
						<h2>John Doe</h2>
						<h4>Obreiro</h4>
						<p>Auxiliar</p>
					</div>
				</div>
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="img/team/user.png" alt="">
						<h2>John Doe</h2>
						<h4>Obreiro</h4>
						<p>Auxiliar</p>
					</div>
				</div>
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="img/team/user.png" alt="">
						<h2>John Doe</h2>
						<h4>Obreiro</h4>
						<p>Auxiliar</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/#our-team-->
	<hr>

	<footer>
		<div id="contact">
			<div class="container">
				<div class="text-center">
					<h3>Contato e Endereço</h3>
					<p>Para Chegar até nós</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
						<h2>Entre em contato conosco a qualquer momento</h2>
						<p>Estamos Abertos a Ajudar quem precisar.</p>
					</div>

					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
						<h2> Endereço</h2>
						<ul>
							<li><i class="fa fa-home fa-2x"></i> SEDE, Av Araguaia,Qd 136, Lt 12, Aureny III</li>
							<hr>
							<li><i class="fa fa-phone fa-2x"></i> +55 063 1111100</li>
							<hr>
							<li><i class="fa fa-envelope fa-2x"></i> info@ijemavi.net</li>
						</ul>
					</div>

					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						<div id="sendmessage">Sua mensagem foi enviada. Obrigado!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Por favor, insira pelo menos 4 caracteres" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Por favor digite um email válido" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" id="subject" placeholder="assunto" data-rule="minlen:4" data-msg="Por favor, insira pelo menos 8 caracteres de assunto" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<button type="submit" class="btn btn-theme pull-left">Enviar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--/#contact-->
		<div class="container">
			<div class="sub-footer">
				<div class="text-center">
					<div class="col-md-12">
						<form class="form-inline">
							<div class="form-group">
								<button type="purchase" name="purchase" class="btn btn-primary btn-lg" required="required">Coloque seu Email</button>
							</div>
							<div class="form-group">
								<button type="subscribe" name="subscribe" class="btn btn-primary btn-lg" required="required">Inscrever-se</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="social-icon">
			<div class="container">
				<div class="col-md-6 col-md-offset-3">
					<ul class="social-network">
						<li><a href="https://web.facebook.com/pg/IJEMAVI/photos/?ref=page_internal" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<!-- <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li> -->
						<li><a href="https://br.linkedin.com" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://www.youtube.com" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						<!-- <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li> -->
						<!-- <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li> -->
					</ul>
				</div>
			</div>
		</div>
		<div class="text-center">
			<div class="copyright">
				&copy; All Rights Reserved.
			</div>
		</div>
	</footer>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<!-- <script src="js/parallax.min.js"></script> -->
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script src="contactform/contactform.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
			<!-- Include all compiled plugins (below), or include individual files as needed -->

			<script src="js/bootstrap7.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>FSN Cursos Online</title>
	<meta name="author" content="Fábio Souza - FSN Cursos Online">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- IMPORTANDO GOOGLE ICONS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- IMPORTANDO CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
<body>

	<!-- MENUS E BANNER SLIDER -->
	<div class="row">
		<nav class="blue">
			<div class="nav-wrapper container">
				<a href="" class="brand-logo">R-Thompsom</a>
				<a href="" class="button-collapse" data-activates="mobile"><i class="material-icons">menu</i></a>

				<!-- MENU PARA DESKTOP -->
				<ul class="right hide-on-med-and-down">
					<li><a href="index.php"><i class="material-icons left">home</i>Início</a></li>
				</ul>

				<!-- MENU PARA DISPOSITIVOS MÓVEIS -->
				<ul class="side-nav" id="mobile">
					<li><img src="img/card-reveal-image-2.jpg" width="100%"></li>
					<li><a href="index.php"><i class="material-icons left">home</i>Início</a></li>
				</ul>
			</div>
		</nav>

		<!-- BANNER SLIDER -->

		<div class="slider">
			<ul class="slides">
				<li>
					<img src="img/banner-slider-1.jpg">
					<div class="caption right-align grey-text">
						<h4>Lorem Ipsum</h4>
						<h5>Lorem ipsum dolor sit amet, <br>consectetur adipisicing.</h5>
						<a href="#formularioModal" class="btn teal modal-trigger">contrate</a>
					</div>
				</li>
				<li>
					<img src="img/banner-slider-2.jpg" alt="">
					<div class="caption black-text left-align">
						<h4>Lorem Ipsum</h4>
						<h5>Lorem ipsum dolor sit amet, <br>consectetur adipisicing.</h5>
						<a href="#formularioModal" class="btn teal modal-trigger">contrate</a>
					</div>
				</li>
			</ul>
		</div>
	</div>


	<!-- FORMULÁRIO MODAL NO RODAPÉ -->
	<div class="modal bottom-sheet" id="formularioModal">
		<div class="modal-content">
			<form action="contato.php" method="post">
				<fieldset class="row container">
					<legend><h6>Informe Seus Dados e Data do Evento</h6></legend>
					<div class="input-field col s12 m4">
						<label for="#nome">Nome</label>
						<input type="text" id="nome" name="nome" class="validate" required autofocus>
					</div>

					<div class="input-field col s12 m4">
						<label for="#telefone">Telefone</label>
						<input type="tel" id="telefone" name="telefone" class="validate" required>
					</div>

					<div class="input-field col s12 m4">
						<label for="#email">E-mail</label>
						<input type="email" id="email" name="email" class="validate" required>
					</div>

					<div class="input-field col s12 m6">
						<label for="#endereco">Endereço</label>
						<input type="text" id="endereco" name="endereco" class="validate" required>
					</div>

					<div class="input-field col s12 m6">
						<input type="date" id="data" name="data" class="validate">
					</div>

					<div class="col s12 m6">
						<button class="btn" type="submit">enviar</button><br><br>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!-- FIM DO FORMULÁRIO -->

	<div class="row container"><!-- TEXTOS -->
		<p>&nbsp;</p>

		<div class="col s12 m8 offset-m2">
			<h4 class="grey-text">lorem ipsum</h4>
			<p>
				<strong><span class="blue-text">Lorem ipsum dolor sit</span></strong> amet, consectetur adipisicing elit. Itaque exercitationem vel tenetur, voluptas, neque enim, suscipit nisi eos deleniti eius quibusdam nesciunt deserunt officia natus corrupti, eum voluptate inventore iure!<br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. In veniam vel magnam impedit voluptatum architecto dolor itaque, ad aliquam doloremque totam perspiciatis aspernatur iusto blanditiis, non, neque exercitationem sit odit!
			</p>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, nisi, reiciendis dolorum ipsum libero doloremque saepe et ipsa quis minus incidunt nihil. Laudantium provident, corporis doloribus, eaque sequi magnam cum.
			</p>

			<p>&nbsp;</p>

			<h4 class="grey-text">Principais Eventos</h4>
			<p>
				<strong><span class="blue-text">São Paulo Fashion Week</span></strong><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet voluptatum beatae ex quam.
			</p>

			<p>
				<strong><span class="blue-text">Feira do Automóvel de São Paulo</span></strong><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet voluptatum beatae ex quam.
			</p>

			<p>
				<strong><span class="blue-text">Festival de Música em Orlando</span></strong><br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet voluptatum beatae ex quam.
			</p>
		</div>
	</div><!-- FIM DOS TEXTOS -->

	<!-- PARALLAX -->
	<div class="parallax-container">
		<div class="parallax"><img src="img/slider-1.jpg" alt=""></div>
		<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
		<h1 class="grey-text text-lighten-2 center-align">Richard Thompsom</h1>
		<h5 class="grey-text text-lighten-2 center-align">Fotógrafo há mais de 20 anos.</h5>
	</div>


	<!-- RODAPÉ PRINCIPAL DA PÁGINA -->
	<footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Richard Thompsom</h5>
                <p class="grey-text text-lighten-4">Fotografia é assim,<br>poesia composta de luz.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                  <li><a class="grey-text text-lighten-3 modal-trigger" href="#formularioModal">Contato</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Templates FSN Cursos Online
            <a class="grey-text text-lighten-4 right" href="#!">Fábio Souza</a>
            </div>
          </div>
    </footer>

	


	<!-- IMPORTANDO JQUERY E JAVASCRIPT -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/materialize.min.js"></script>

	<!-- CONFIGURAÇÕES JQUERY E JAVASCRIPT -->
	<script>
		$('document').ready(function(){
			$('.parallax').parallax();
			$('.modal').modal();
			$('.button-collapse').sideNav();
			$('.slider').slider();
		});
	</script>
</body>
</html>
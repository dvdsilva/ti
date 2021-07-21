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
				<a href="" class="brand-logo">Books</a>
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
	</div>

	<!-- GALERIA DE FOTOS -->
	<div class="row container">
		<div class="col s12 grey-text"><h4 class="center">Meu Portfólio</h4></div>
		<ul>
			<?php
				for($c = 1; $c <= 12; $c++){
					echo "<li class='col s12 m3 galeria'>";
					echo "<img src='img/books-$c.jpg' class='responsive-img materialboxed' data-caption='FSN Templates'>";
					echo "</li>";
				}
			?>
		</ul>
	</div>

	<div class="row container"><br><hr></div>

	<!-- CARD HORIZONTAL -->
	<div class="row container">
		<div class="col s12 center grey-text">
			<h4>Sobre mim</h4>
		</div>
		<div class="col s12">
			<div class="card horizontal">
				<div class="card-image">
					<img src="img/horizontal-card.jpg" class="responsive-img">
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<span class="card-title">Richard Thompsom - Fotógrafo</span><br>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora voluptates delectus excepturi mollitia obcaecati at vitae repellendus voluptate fugit repudiandae, id, ea aliquid, perferendis animi cumque consectetur autem veniam nam!
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque iste dolor aut dignissimos odio obcaecati iusto ea, animi nam, quidem molestias eius soluta sequi quam perspiciatis porro, est ex adipisci.
						</p>
						<blockquote>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam consectetur alias, esse placeat nisi ut, dolore sapiente doloremque voluptatum.
						</blockquote>
						<blockquote>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam consectetur alias, esse placeat nisi ut, dolore sapiente doloremque voluptatum.
						</blockquote>
						<blockquote>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam consectetur alias, esse placeat nisi ut, dolore sapiente doloremque voluptatum.
						</blockquote>
					</div>
					<div class="card-action"><a href="">indicações</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- CARDS REVEAL -->
	<div class="row container">

		<div class="col s12 grey-text center"><h4>Nossos Serviços</h4></div>
		<!-- PRIMEIRO CARTÃO -->
		<div class="col s12 m4">
			<div class="card sticky-action">
				<div class="card-image">
					<img src="img/card-image-1.jpg" class="activator">
				</div>
				<div class="card-content">
					<span class="card-title activator">
						<h5>Casamentos<i class="material-icons right">more_vert</i></h5>
					</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores magnam repellat.<br>
					</p>
				</div>
				<div class="card-reveal">
					<span class="card-title"><h5>Contrate para Casamentos<i class="material-icons right">close</i></h5></span>
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
						Fotógrafo: <strong class="blue-text">Paul Thomas</strong>
					</blockquote>
					<div class="card-image">
						<img src="img/card-reveal-image-1.jpg" alt="">
					</div>
				</div>
				<div class="card-action">
					<a href="#formularioModal" class="modal-trigger">entrar em contato</a>
				</div>
			</div>
		</div>

		<!-- SEGUNDO CARTÃO -->
		<div class="col s12 m4">
			<div class="card sticky-action">
				<div class="card-image">
					<img src="img/card-image-2.jpg" class="activator">
				</div>
				<div class="card-content">
					<span class="card-title activator">
						<h5>Books<i class="material-icons right">more_vert</i></h5>
					</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores magnam repellat.
					</p>
				</div>
				<div class="card-reveal">
					<span class="card-title"><h5>Contrate para Books<i class="material-icons right">close</i></h5></span>
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
						Fotógrafo: <strong class="blue-text">James Gere</strong>
					</blockquote>
					<div class="card-image"><img src="img/card-reveal-image-2.jpg" alt=""></div>
				</div>
				<div class="card-action">
					<a href="#formularioModal" class="modal-trigger">entrar em contato</a>
				</div>
			</div>
		</div>

		<!-- TERCEIRO CARTÃO -->
		<div class="col s12 m4">
			<div class="card sticky-action">
				<div class="card-image">
					<img src="img/card-image-3.jpg" class="activator">
				</div>
				<div class="card-content">
					<span class="card-title activator">
						<h5>Ensaios<i class="material-icons right">more_vert</i></h5>
					</span>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores magnam repellat.
					</p>
				</div>
				<div class="card-reveal">
					<span class="card-title"><h5>Contrate para Ensaios Fotográficos<i class="material-icons right">close</i></h5></span>
					<blockquote>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
						Fotógrafo: <strong class="blue-text">Thomas Anderson</strong>
					</blockquote>
					<div class="card-image"><img src="img/card-reveal-image-3.jpg" alt=""></div>
				</div>
				<div class="card-action">
					<a href="#formularioModal" class="modal-trigger">entrar em contato</a>
				</div>
			</div>
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


	<!-- RODAPÉ PRINCIPAL DA PÁGINA -->
	<footer class="page-footer blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Richard Thompsom</h5>
                <p class="grey-text text-lighten-4">Fotografar é assim<br>poesia composta de luz.</p>
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
            © 2018 Templates - FSN Cursos Online
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
			$('.modal').modal();
			$('.button-collapse').sideNav();
			$('.slider').slider();
			$('.materialboxed').materialboxed();
		});
	</script>
</body>
</html>
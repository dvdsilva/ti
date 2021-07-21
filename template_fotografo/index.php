<!-- À QUEM ADQUIRIU ESSE TEMPLATE: QUE DEUS TE ABENÇOE -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>FSN Cursos Online</title>
	<meta name="author" content="Fábio Souza - FSN Cursos Online">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- IMPORTANDO GOOGLE ICONS
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->

	<!-- IMPORTANDO CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
<body>

	<!-- BANNER SLIDER -->
	<div class="slider fullscreen">
		<ul class="slides">
			<li><!-- BANNER 1 -->
				<img src="img/slider-1.jpg">
				<div class="caption left-align">
					<h4>Richard Thompsom</h4><h5>Fotógrafo</h5>
					<a href="books.php" class="btn blue">meu portfólio</a>
				</div>
			</li>

			<li><!-- BANNER 2 -->
				<img src="img/slider-2.jpg">
				<div class="caption center-align">
					<h4>Contrate um Fotógrafo...</h4><h5>... e eternize seus momentos!<br></h5>
					<a href="contrate.php" class="btn green lighten-2">ler mais</a>
				</div>
			</li>				
		</ul>
	</div>

	<!-- IMPORTANDO JQUERY E JAVASCRIPT -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/materialize.min.js"></script>

	<!-- CONFIGURAÇÕES JQUERY E JAVASCRIPT -->
	<script>
		$('document').ready(function(){
			$('.button-collapse').sideNav();
			$('.slider').slider();
		});
	</script>
</body>
</html>
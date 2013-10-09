<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contacto</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
</head<body>
	<header id="header">
		<div id="logo">
			logo
		</div>
		<nav class="menu">
			<ul class="lista">
				<li class="tab">Home</li>
				<li class="tab">Nosotros</li>
				<li class="tab">Productos</li>
				<li class="tab">Viñedos</li>
				<li class="tab"><a href="#">Contacto</a></li>
			</ul>
		</nav>
	</header>
	<div id="contacto">
		<div class="container">
			<div class="contacto-inf">
				<p>
					Contacta con nosotros a <a href="#">correo@dominio.com</a> o llenando el formulario
				</p>
				<hr>
				<p class="redes">A través de nustras redes sociales</p>
				<ul class="social">
					<li><a href="" class="icon-button facebook"><i class="icon-facebook" data-icon="&#xe000;"></i><span></span></a></li>
					<li><a href="" class="icon-button twitter"><i class="icon-twitter" data-icon="&#xe001;"></i><span></span></a></li>
				</ul>
			</div>
			<div class="contacto-form">
				<form action="" method="post" id="contactForm">
					<p class="item-form">
						<input class="input name required" type="text" name="nombre" placeholder="Nombre" title="Escibe tu nombre"/>	
					</p>
					<p class="item-form">
						<input class="input email required" type="email" name="email" placeholder ="Correo electrónico" title="Correo electrónico"/>	
					</p>
					<p class="item-form">
						<input class="input subject required" type="text" name="asunto" placeholder="Asunto" title="Asunto"/>	
					</p>
					<p class="item-form">
						<textarea class="message required" name="mensaje" rows="4" cols="50" placeholder="Mensaje" title="Mensaje"></textarea>	
					</p>					
					<input class="btn-enviar" type="submit" value="Enviar"/>	
				</form>
			</div>
		</div>
	</div>
	<footer>

	</footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script src="js/validarFormulario.js"></script>
</body>
</html>
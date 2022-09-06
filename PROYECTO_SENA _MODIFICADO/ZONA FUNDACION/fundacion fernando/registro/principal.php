<?php

	session_start();


	require 'database.php';	


	if (isset($_SESSION['user_id'])) {
		$records = $conn->prepare('SELECT id, email, password FROM login_fundacion WHERE id = :id');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
	
		$user = null;
	
		if (count($results) > 0) {
		  $user = $results;
		}
	  }
	  ?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Ejemplo de HTML5">
		<meta name="keywords" content="html5, CSS3, JavaScript">
		<meta="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">			
		<title>fundacion adopcion animal</title>
		<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
		<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

		<script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous">
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



		<script type="text/javascript">
			$(document).ready(function(){
				alert("jquery se cargo correctamente");

			});
		
		</script>
	</head>
	<body>
		<header>
			<h1>FUNDACION DE ADOPCION ANIMAL </h1>
		</header>
			<?php require 'partials/header.php'; ?>

			<?php if(!empty($user)): ?>
      		<br> Bienvenido. <?= $user['email']; ?>
      		<br>Has iniciado sesión correctamente.
     	 	<a href="logout.php">
				Cerrar sesión.
     		 </a>
    		<?php else: ?>
				<?php endif; ?>
		
		<div id=>
		
		<div id="header">
			<ul class="nav">
				<li><a href="logout.php">INICIO</a></li>
				<li><a href="">FUNDACIÓN</a>
					<ul>
						<li><a href="info/infor.php">Información</a></li>
						<li><a href="info2/infor2.php">Nuestros servicios</a></li>
						<li><a href="partials/contactos.php">Contactanos</a>
							
						</li>
					</ul>
				</li>
				<li><a href="">ADOPCIONES</a>
					<ul>
						<li><a href="info/infor.php">Lista de adopciones</a></li>
						<li><a href="signup.php">Resgistro de usuarios <!--linkar aqui la interfas para usuarios--></a></li>
						
							
						</li>
					</ul>
					<li><a href="">HERRAMIENTAS</a>	
					<ul>
						<li><a href="">Agregar información</a></li>
						<li><a href="archivos/index.php">Adjuntar archivos</a></li>
						<li><a href="">Adjuntar imágenes</a>
						<li><a download="" href="">Galeria fotos</a></li>
						<li><a href="">Otros</a></li>
							<ul>
								<li><a href="" download="">poner nombre</a></li>
								<li><a href="" download="">poner nombre1</a></li>
								<li><a href="" download="">poner nombre</a></li>
								<li><a download="" href="">Fernando</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		
		<table id="header">
			<tr>
				<td>Cachorros como estos</td>
			</tr>
		</table>
		<thead>
			<tr>
				<th>imagen 1</th>
				
			</tr>
		<thead>
		<section>
			<hgroup id="columna">
				<h2>Descripción de funciones</h2>
				<br/>
				<p>Hay objetos de gran utilidad en la intefaz de fundación las cuales son para funcionalidades; 
					necesarias para la ejecución pues estas tienen multimedia y conexión a galerias videos entre otros por tanto
					a la informacion que se le muestra al publico asi como el menu de herramientas y demas opciones del sitio.
				</p>
			</hgroup>
		</section>
		<figure class="imagen1">
			<img src="imagenes/foto1.jpg" width="100%" height="auto">
		</figure>
		<figure class="imagen1">
			<img src="imagenes/fotos2.jpg" width="100%" height="auto">
		</figure>
		</div>
		<div id="pie">
			<footer > 
				<p><h5>la pagina es diseñada y creada por: Fernando Trujillo Vélez.</h5></p>
				<small>Derechos Reservados &copy;2022 Fundacion de adopcion.</small>
				<time datetime="2022-07-16" pubdate>publicado 16-07-2022.</time>
			</footer>
		</div>
	</body>
</html>
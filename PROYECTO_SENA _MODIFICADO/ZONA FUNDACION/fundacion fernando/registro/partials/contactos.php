<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Ejemplo de HTML5">
		<meta name="keywords" content="html5, CSS3, JavaScript">
		<meta= "viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">			
		<title>fundacion adopcion animal</title>
		<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
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
		
		<div id="header">
			<ul class="nav">
				<li><a href="../contactos.php">INICIO</a></li>
                
				<li><a href="">ADOPCIONES</a>
					<ul>
						<li><a href="../signup.php">Registro de usuarios</a></li>
						<li><a href="../info/infor.php">Agregar descripción</a></li>
						<li><a href="../imagenes/foto1.jpg">imagenes</a></li>
                        
                    </ul>
                    <li><a href="../principal.php">Volver</a></li>
					
					
		</div>
		
		
		<section>
			<hgroup id="columna">
				<h2>Lo que ofrece</h2>
				<br/>
				<p>Hay objetos de gran utilidad en el parque educativo muchas de estas cosas sirven para funcionalidades; necesarias para la educación pues estas tiene multimedia y coneccion a internet esto con el fin de educar tanto al público como a quien de forma privada preste algunas para los servicios propios pero estos no deben salir del sitio.
				</p>
			</hgroup>
			<hgroup id="seccion">
				<h2>Atención</h2>
				<br/>
				<p>La atención es de Lunes a Viernes de 8am a 6pm en horario habitual
				en horario extraordinario son los Sábados cuando este se solicita debidamente 
				o por algún evento necesario en esos días.
				</p>
			</hgroup>
			<div id="seccion">
				<h2>Escribenos</h2>
				<aside>
				<label for="nombre">Nombre:</label>
					<input type= "text" id="Nombre:" placeholder="escribe tu nombre">
					<br/>	
				<Label for="Email">Email:</Label>
					<input type="Email" id="Email" placeholder="Escribe tu email">
					<br/>
				<label for="mensaje">Mensaje</label>
					<textarea id="mensaje" placeholder="Escribe tu mensaje"></textarea>
					<br/>
					<input type="submit"  value="Enviar">
				</aside>
			</div>
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
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Ejemplo de HTML5">
		<meta name="keywords" content="html5, CSS3, JavaScript">
		<meta="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">			
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
		<div id="agrupar">
		 <header>
			<h1>FUNDACION DE ADOPCIÓN ANIMAL</h1>
		 </header>
		<nav>
			<ul class="nav">
				<li><a href="../principal.php">Volver</a></li>
			</ul>
		</nav>
		<section>
			<hgroup id="seccion">
				<h2>Lo que ofrece</h2>
				<br/>
				<p>Hay deversos productos de gran utilidad en la fundacion de adopcion animal que facilitan 
					las ayudas para los animales que se adoptanosas y sirven para funcionalidades que son 
					necesarias para la adecuada ingesta alimenticia de las mascotas.
				</p>
			</hgroup>
			<hgroup id="seccion">
				<h2>Atención</h2>
				<br/>
				<p>la atecion es de lunes a viernes de 8am a 6pm en horario habitual
				en horario extraordinario son los sabados cuando este se solicita devidamente 
				o por algun evento necesario en esos dias.
				</p>
			</hgroup>
		</section>
		<figure class="imagen1">
			<img src="imagenes/foto1.jpg" width="100%" height="auto">
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
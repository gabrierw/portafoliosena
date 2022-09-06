<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="descrption" content="Diversión y momentos inolvidables" />
	<meta name="keywords" content="HTML5, CSS, Javascript" />
	<meta name="author" content="Fernando Trujillo">
	<title>fundacion adopcion animal</title>
	<link rel="stylesheet" href="CSS/estilos.css">
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
		<h1>SUBE AQUI TU ARCHIVO </h1>
	</header>

	<section>
	<div id="agrupar">
		<div class="contenedor">
			
		</div>
		<div id="article">
				<h2>subir archivo</h2>
				<aside>
				<form action="upload.php" method="POST" enctype="multipart/form-data">
            	<label for="nombre"></label>
				<br>
				<input type="file" name="file">
				<label for="mensaje" placeholder="Escribe tu cotraseña"></label>
            	<br>
				<p class="center"><input type="submit" value="subir archivo"></p>
            	</div>
        		</form>
				
			
		</section>
        <div id="seccion">
        
        
        <nav id="menu">
			<ul>
				<li><a href="../principal.php">Volver</a></li>
			</ul>
		</nav>
    </div>
		
		
	</header>
	</article>

	</section>
	<div id="pie">
		<footer > 
			<p><h5>la pagina es diseñada y creada por: Fernando Trujillo Vélez.</h5></p>
			<small>Derechos Reservados &copy;2022 Fundacion de adopcion.</small>
			<time datetime="2022-07-16" pubdate>publicado 16-07-2022.</time>
		</footer>
	</div>
</div>
</body>
</html>
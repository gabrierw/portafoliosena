<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="descrption" content="Diversión y momentos inolvidables" />
	<meta name="keywords" content="HTML5, CSS, Javascript" />
	<meta name="author" content="Fernando Trujillo">
	<title>fundacion adopcion animal</title>
	<link rel="stylesheet" href="CSS/estilos.css">

	<style>
#botton{
width:80px;
height:30px;
border-radius:10px;
background:orange;
cursor:pointer;
border: solid white;
color:white;
}
#iframe1{

width:"780";
 height:"550";
 border-color:3px solid red;
}
#botton{
margin-right:400px;


}


	</style>
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
		<h1>INFORMACION DE LA FUNDACION </h1>
	</header>

	<section>
		<article>
			<figure>
				<div id="contenedor_i" width="780" height="550"><iframe id="iframe1"  src="../../../fundacion catherine/index.php"></iframe>



				</div>
			<header id="seccion">
				<div class="contenedor">
					<p>Bienvenidos a la fundacion de adopción animal"</p>
			<p>El servicio de la fundación surge como la solución al problema que se enfrenta
			con los animales abandonados.</p>
		</div>
		<div class="contenedor">
			   		<p>"NUESTROS PILARES"</p>
			<p>*Buena Calidad</p>
			<p>*Buen Servicio</p>
			<p>*Buenos Precios</p>
			<p>*Trabajadores con Conducta y Cultura</p>
			<p>*Creciemiento Robusto y Rentable</p>
			<p>*Servicio con orden e Innovacion</p>
			<p>*Prioridad en Seguridad y Salud en el Trabajo</p>
		</div>
		<nav id="menu">
			<ul>
				<li><a href="../principal.php">Volver</a></li>
			</ul>
		</nav>
	</header>

    <form id ="boton">

  <a href="../../../fundacion catherine/index.php"><input type="button" id= "botton" value="ingresar"></a>

	</form>
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
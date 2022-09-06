<?php
	session_start();

	require 'database.php';	

	if (isset($_SESSION['user_id'])) {
		$records = $conn->prepare('SELECT id, email, password FROM login_fundacion WHERE id = :id');
		$records->bindParam(':id', $_SESSION['user_id']);
		$records->execute();
		$results = $records->fetch(PDO::FETCH_ASSOC);
	
		$user = null;
	
		if (is_countable($results) > 0) {
		  $user = $results;
		}
	  }

?>




<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>fundacion adopcion animal</title>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width">
	 <meta name="description" content="diseño y desarrollo">
	 <meta name="keywords" content="html,css,php">
	 <meta name="author" content="fernando Trujillo">      
	<link rel="stylesheet" href="css/estilos.css">
 <!--cambiar el la etiqueta link en href si se necesita-->
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
	

	<?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user['email']; ?>
      <br>Has iniciado sesión correctamente
      <a href="principal.php">
       Siguiente
      </a>
    <?php else: ?>
		
			<h1>Por favor Registrese o inicie sesiòn </h1>

			<h3>Elija que hacer</h3>
			
			
			<div id="header">
				<ul class="nav">
					<ul>
						
						<li><a href="login.php">inicia sesiòn</a></li>
						<li><a href="signup.php">Resgistrate</a></li>
						
				
					</ul>
				</ul>	
					
		
      		</div>
			
	<?php endif; ?>
		
  		<br>
			<footer id="pie"> 
				<p><h5>la pagina es diseñada y creada por: Fernando Trujillo Vélez.</h5></p>
				<small>Derechos Reservados &copy;2022 Fundacion de adopcion.</small>
				<time datetime="2022-07-16" pubdate>publicado 16-07-2022.</time>
			</footer>
		</body>
	</html>


<?php

?>
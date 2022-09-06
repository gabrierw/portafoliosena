<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: principal.php');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {
    $records = $conn->prepare('SELECT id, email, password FROM login_fundacion WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contraseña'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: principal.php");
    } else {
      $message = 'Lo sentimos, esas credenciales no coinciden';
    }
  }

?>



<!DOCTYPE html>
	<html lang="es">
	<head>
		<title>fundacion adopcion animal Login</title>
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

            <a href=""></a>

		
    </head>
	<body>
			<?php require 'partials/header.php' ?>

			<?php if(!empty($message)): ?>
      			<p> <?= $message ?></p>
    		<?php endif; ?>
			<h1>Iniciar Sesiòn</h1>
			<span> or <a href="signup.php">Registrarse</a></span>

       	 	<form action="login.php" method="POST">
            	<aside class="contenedor1">
      			
     			<Label for="email">Email:</Label>
				<input name="email" type="text" placeholder="Escribe tu email">
      			<label for="mensaje" placeholder="Escribe tu cotraseña">Escribe tu contraseña</label>
				<input name="contraseña" type="password"  placeholder="Escribe tu contraseña">
				<br>
                <input type="submit"  value="ingresar" name="btnlong">
				
			</form>		
      		</aside>
			  <nav>
				<ul class="nav">

					   <li><a href="index.php">VOLVER</a></li>
				   </ul>
			</nav>

       
      
			<footer > 
				<p><h5>la pagina es diseñada y creada por: Fernando Trujillo Vélez.</h5></p>
				<small>Derechos Reservados &copy;2022 Fundacion de adopcion.</small>
				<time datetime="2022-07-16" pubdate>publicado 16-07-2022.</time>
			</footer>
		</body>
</html>

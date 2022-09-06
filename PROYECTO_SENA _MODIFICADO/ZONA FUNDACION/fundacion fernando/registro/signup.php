<?php
	require 'database.php';

	$message = '';
	
	if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nombre']) && !empty($_POST['nit']) && !empty($_POST['numero']) && !empty($_POST['confirm_password']) ) {
		$sql = "INSERT INTO login_fundacion (email, password, nombre, nit, celular, conpassword) VALUES (:email, :password, :nombre, :nit, :numero, :confirm_password)";
		$st = $conn->prepare($sql);
		$st->bindParam(':email', $_POST['email']);
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$st->bindParam(':password', $password);
		$st->bindParam(':nombre',$_POST['nombre']);
		$st->bindParam(':nit',$_POST['nit']);
		$st->bindParam(':numero',$_POST['numero']);
		$password= password_hash($_POST['confirm_password'], PASSWORD_BCRYPT);
		$st->bindParam(':confirm_password', $password); 
		
		if ($st->execute()) {
		  $message = 'Successfully created new user';
		} else {
		  $message = 'Sorry there must have been an issue creating your account';
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
	 <meta name=keywords" content="html,css,php">
	 <meta name="author" content="fernando Trujillo">      
	<link rel="stylesheet" href="css/estilos.css">
 <!--cambiar el la etiqueta link en href si se necesita
if (!empty($_POST['email']) && !empty($_POST['password'])) {
		$sql = "INSERT INTO login_fundacion (name,email,nitnum,cellnum, password, conpassword) VALUES (:nombre, :email, :number1, :number, :password, :confirm_password)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':name',$_POST['nombre']);
		$stmt->bindParam(':email',$_POST['email']);
		$stmt->bindParam(':nitnum',$_POST['number1']);
		$stmt->bindParam(':cellnum',$_POST['number']);
		$password= password_hash($_POST['password'], PASSWORD_BCRYPT);
		$stmt->bindParam(':password', $password); 
		$password= password_hash($_POST['confirm_password'], PASSWORD_BCRYPT);
		$stmt->bindParam(':confirm_password', $password); 
		
		
		if ($stmt->execute()) {
			$message = 'successfully created new user';

		} else {
			$message = 'sorry there must have an issue creating your accounth';
		}
	}		-->
	<script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous">
		</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<body>
	<?php require 'partials/header.php' ?>

		<?php if (!empty($message)):?>
			<p><?php $message ?></p>
		<?php endif; ?>
			
      	<div class="contenedor1">
			<div id="encabezado1">
				<h1>Registro </h1>
				
			</div>
			<span> or <a href="principal.php">Iniciar sesiòn</a></span>
			<form action="signup.php" method="post">
      		<aside class="contenedor1">
      			<label for="nombre">Nombre:</label>
      			<input type= "text" name="nombre" placeholder="Escribe tu nombre">

     			<Label for="email">Email:</Label>
      			<input type="email" name="email" placeholder="Escribe tu email">
      			<label for="mensaje" placeholder="Escribe tu nit">Escribe tu nit</label>
				<input type="text" name="nit" min="1" max="18" placeholder="Escribe tu nit">
      			<label for="mensaje" placeholder="Escribe tu celular">Escribe tu celular</label>
				<input type="tel" name="numero" pattern="[0-9]{1,20}" placeholder="Escribe tu celular">
				<label for="mensaje" placeholder="Escribe tu cotraseña">Escribe tu contraseña</label>
				<input type="password" name="password" placeholder="Escribe tu contraseña">
				<label for="mensaje" placeholder="confirmar tu cotraseña">Confirma tu contraseña</label>
				<input type="password" name="confirm_password" placeholder="Confirmar tu contraseña">				
				<br>
				<br>
				<input type="submit"  value="Registrar">

      		</aside>
			</form>
	
			<nav>
				<ul class="nav">

					   <li><a href="index.php">VOLVER</a></li>
				   </ul>
			</nav>
	  	
  		</div>
		  <footer > 
			<p><h5>la pagina es diseñada y creada por: Fernando Trujillo Vélez.</h5></p>
			<small>Derechos Reservados &copy;2022 Fundacion de adopcion.</small>
			<time datetime="2022-07-16" pubdate>publicado 16-07-2022.</time>
		</footer>
		</body>
	</html>
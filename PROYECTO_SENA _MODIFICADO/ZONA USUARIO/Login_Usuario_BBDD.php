<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funacion_pets</title>
    <link rel="stylesheet" href="Estilos fundacion/estilo_fundacion.css">
    
    
<style>
#Email{margin-left: 30px;
border-radius: 1px;












}
#contrasena{

border-radius: 3px;


}

h1{
padding-left: 30px;



}
li{
  padding-top: 10px;

  padding-left: 25px;


}


input.error{

background-color: rgb(255, 160, 160);
border-radius: 1px;



}


.bad{

color: #00ffff;
background-color:transparent;
width: 30%;
padding-left:750px;
border-radius:7px;
backdrop-filter: blur(5px);
background-position: 100%;
background-repeat:repeat;
border: 5px solid #555555;
padding: 30px;
margin:auto;
height:20px;
max-height:auto;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
-moz-border-radius: 50px 50px 50px 50px;
-webkit-border-radius: 50px 50px 50px 50px;
border-radius: 50px 50px 50px 50px;
-moz-box-shadow:  rgb( 15,200,225) 10px 10px 10px;
-webkit-box-shadow: rgb(15,200,225) 10px 10px 10px;
box-shadow: rgb(15,200,225) 10px 10px 10px;
}





</style>
<script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script> 
    <script src="../../../JAVASCRIPT/PLUGGIN VALIDACION FORMULARIOS JQUERY.js"></script>


<script src="script1.js"></script>





</head>
<body>
<main>

        <div class="contenedor__todo">
         <div class="caja__trasera">
          <div class="caja__trasera-login">
            
            <h1>iniciar sesion</h1><br><br><br>
            <form action="pruebasBBDD2.php" id="formulario" method="post" > 
                <p>Email:&nbsp;<input type="email" id="Email"  placeholder="Ingrese email" name="email"></p><br>
            <p>Password:&nbsp;<input type="password" id="contrasena"  placeholder="Ingrese contraseña"  name="contrasena"></p><br><br>
                             <input type="submit" id="btn__iniciar_sesion" value="Iniciar sesion"><br><br>


            </form>
            <li><a href="Redireccionar_Registro_BBDD.php">¿Aun no tienes cuenta?</a></li><br>
            <li><a href="Lost_Password_Usuario_BBDD.php">¿olvidaste tu contraseña?</a></li><br>



            
          </div>
        </div>
    </div>
</main> 





</body>
</html>
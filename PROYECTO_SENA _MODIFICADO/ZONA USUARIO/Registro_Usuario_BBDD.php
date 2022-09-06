<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="Estilos fundacion/estilo_fundacion.css">
    <script src="funcionalidad_sena.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script> 
    <script src="../../../JAVASCRIPT/PLUGGIN VALIDACION FORMULARIOS JQUERY.js"></script>



<style>



#telefono{

    margin-left: 105px;
}
#Email{

margin-left: 90px;
}

#contraseña{

margin-left: 60px;
}

.titulo{margin-left: 80px;



}
.botones{
    margin-left: 75px;




}

input.error{

background-color: rgb(255, 160, 160);
border-radius: 1px;





}


.bad3{

    color: #ff6961;
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
-moz-box-shadow:  rgb( 15,500,225) 10px 10px 10px;
-webkit-box-shadow: rgb(15,500,225) 10px 10px 10px;
box-shadow: rgb(15,900,125) 10px 10px 10px;

}


</style>


<script>

$(document).ready(function(){

    $("#formulario2").validate().css({"color":"white"})









})
</script>
</head>
<body>

    <main>

        <div class="contenedor__todo">
         <div class="caja__trasera">
          <div class="caja__trasera-login">
            <div class="titulo">
            <h1>Registrarse</h1><br><br><br>
        </div>
            <form  action="pruebasBBDD.php" id="formulario2" method="post"> 
       
                <p>Email:&nbsp;<input type="email" id="Email " class="required" name="email"></p><br>
                <p>Nombre:&nbsp;<input type="text" id="nombre " class="required" name="nombre"></p><br>
                <p>Apellido:&nbsp;<input type="text" id="apellido" class="required" name="apellido"></p><br>
                <p>Cell:&nbsp;<input type="tel" id="telefono" class="required" name="celular"></p><br>


            <p>Password:&nbsp;<input type="password" id="contrasena" class="required" name="contrasena"></p><br>
            <p>confirm_Password:&nbsp;<input type="password" id="contrasena2" class="required" name="contrasena2"></p><br>
             


             <div class="botones">
               <input type="submit" id="btn__iniciar_sesion" value="Registrar" ><br><br>
             </div>
            </form>
          
    
        
          </div>
        </div>
    </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
</main>  







    
</body>
</html>
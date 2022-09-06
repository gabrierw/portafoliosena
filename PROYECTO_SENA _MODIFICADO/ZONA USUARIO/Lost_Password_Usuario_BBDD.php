<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="Estilos fundacion/estilo_fundacion.css">
    <script src="funcionalidad_sena.js"></script>

<style>
#Email{
margin-left: 65px;




}



</style>
<script>

function comenzar(){

miboton=document.getElementById("btn__iniciar_sesion")
miboton.addEventListener("click",anuncio,false)
miboton.addEventListener("click",clear_value,false)



function anuncio (){

alert("se ha cambiado la clave correctamente")




}


function clear_value (){

var email=document.getElementById("Email").value=""
var password=document.getElementById("lastpassword").value=""
var newpassword=document.getElementById("newpassword").value=""




}




}



window.addEventListener("load",comenzar,false)
</script>
</head>
<body>
    <main>

        <div class="contenedor__todo">
         <div class="caja__trasera">
          <div class="caja__trasera-login">
            
            <h1>iniciar sesion</h1><br><br><br>
            <form action="validacion_password.php" method="post" id="formulario"> 
                <p>Email:&nbsp;<input type="email" id="email" name="email"></p><br>
         
                <p>New password:&nbsp;<input type="password" id="new_password" name="new_password"> </p><br>
                <p>confirm password:&nbsp;<input type="password" id="confirm_password" name="confirm_password"> </p><br><br>
                   <input type="submit" id="botton" value="Enviar">
                




            </form>
            


            
          </div>
        </div>
    </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
</main>  






    
</body>
</html>
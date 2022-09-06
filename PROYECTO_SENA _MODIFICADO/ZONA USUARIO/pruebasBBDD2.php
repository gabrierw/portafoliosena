<?php


$email=$_POST['email'];
$Contrasena =$_POST['contrasena'];


if(isset($_POST['iniciar sesion'])){


$email=$_POST['email'];
$Contrasena =$_POST['contrasena'];

}



$conexion=mysqli_connect("localhost","root","","paginaweb2");


$validar_login=mysqli_query($conexion,"SELECT*FROM REGISTRO_USUARIO where GMAIL='$email' and CONTRASENA='$Contrasena'");






if(mysqli_num_rows($validar_login)>0){
  
    header("location:Pagina_Principal_Usuario_BBDD.php");

    exit();
}else{
    ?>
    <?php
    include("LOGIN_Usuario_BBDD.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
  exit();
}

mysqli_close($conexion);

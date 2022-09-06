<?php

$email=$_POST['email'];
$nueva_contrasena=$_POST['new_password'];
$confirmar_contrasena=$_POST['confirm_password'];


if(isset($_POST['Enviar'])){


    $email=$_POST['email'];
    $nueva_contrasena=$_POST['new_password'];
    $confirmar_contrasena=$_POST['confirm_password'];
    


}


$conexion=mysqli_connect("localhost","root","","paginaweb2");

$change_password=mysqli_query($conexion,"UPDATE FROM  RESGISTRO_USUARIO  SET  CONTRASENA='$confirmar_contrasena' WHERE GMAIL='$email' ");




if(mysqli_num_rows($change_password)>0){

include("login_pruebasBBDD.php");



}else{

 echo "se ha producido un error";


    exit();

}





?>
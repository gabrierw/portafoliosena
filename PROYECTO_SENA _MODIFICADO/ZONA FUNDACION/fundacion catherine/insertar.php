<?php

$conexion=mysqli_connect("localhost", "root", "","paginaweb2");


$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$raza=$_POST['raza'];
$tipoAnimal=$_POST['tipoAnimal'];

$sql="INSERT INTO FUNDACION (nombre,edad,raza,tipoAnimal) VALUES('$nombre','$edad','$raza','$tipoAnimal')";
$resultado = mysqli_query($conexion, $sql);




if($resultado){


  
      header("location:index.php");




}else{

   echo "error,intelelo de nuevo";


}





?>
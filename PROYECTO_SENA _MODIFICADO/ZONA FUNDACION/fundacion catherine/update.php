<?php

include("conexion.php");
$conexion=mysqli_connect();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$raza=$_POST['raza'];
$tipoAnimal=$_POST['tipoAnimal'];

$sql="UPDATE fundacion SET  nombre='$nombre',edad='$edad',raza='$raza',tipoAnimal='$tipoAnimal' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
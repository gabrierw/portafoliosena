<?php
function conexion(){
    $conexion=mysqli_connect("localhost", "root", "","paginaweb2");
    if($conexion){
      return $conexion;
     }else{
    return"conexcion no exitosa";
    }
}


?>
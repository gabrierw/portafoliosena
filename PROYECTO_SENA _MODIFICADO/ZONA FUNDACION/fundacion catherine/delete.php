<?php




$id=$_POST['id'];
$conexion=mysqli_connect("localhost", "root", "","paginaweb2");

 
$sql="DELETE FROM FUNDACION   WHERE id='$id'";
$query=mysqli_query($conexion,$sql);




    if($query){
        Header("Location: index.php");


    }else{


        echo "ha ocurrido un error";
    }
?>




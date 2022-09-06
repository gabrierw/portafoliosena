<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$Email = trim($_POST['email']);
$Nombre = trim($_POST['nombre']);
$Apellido = trim($_POST['apellido']);
$Celular = trim($_POST['celular']);
$Contrasena =($_POST['contrasena']);
$Contrasena2 =($_POST['contrasena2']);


if (isset($_POST['Registrar'])) {
    
    $Email = trim($_POST['email']);
    $Nombre = trim($_POST['nombre']);
    $Apellido = trim($_POST['apellido']);
    $Celular = trim($_POST['celular']);
    $Contrasena =$_POST['contrasena'];
    $Contrasena2 =$_POST['contrasena2'];
    $Contrasena=hash('sha512',$Contrasena);
    $Contrasena2=hash('sha512',$Contrasena2);
    }






$conexion=mysqli_connect("localhost","root","","paginaweb2");

$consulta="INSERT INTO REGISTRO_USUARIO(GMAIL,NOMBRE,APELLIDO,TEL,CONTRASENA,CONFIRMAR_CONTRASENA) VALUES ('$Email','$Nombre','$Apellido','$Celular','$Contrasena','$Contrasena2')";

$verificar_correo=mysqli_query($conexion,"SELECT * FROM REGISTRO_USUARIO WHERE GMAIL='$Email'");
if (mysqli_num_rows($verificar_correo)>0){

echo '<script>alert("Este correo ya esta registrado, intenta con otro diferente"); window.location="registro_existente.php"</script>';


exit();
}




$resultado=mysqli_query($conexion,$consulta);



if($resultado){

    header("location:Pagina_Principal_Usuario_BBDD.php");



}else{
    echo "Ha ocurrrido un error";

}

mysqli_close($conexion)




?>
</body>
</html>
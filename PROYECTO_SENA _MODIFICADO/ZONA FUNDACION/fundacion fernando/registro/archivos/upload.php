<?php
$direct ="uploads";

$archivo = $direct . basename($_FILES["file"]["name"]);

$tipoArchivo =strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

$size = getimagesize($_FILES["file"]["tmp_name"]);
$checarimg = getimagesize($_FILES["file"]["tmp_name"]);

//var_dump($size);

if ($size != false) {
    echo $_FILES["file"]["size"];
}
else {
    echo "El documento no es una imagen ";
}
// SE VALIDA TIPO DE ARCHVO Y TAMAÑO
if ($checarimg != false) {
    $size = $_FILES["file"]["size"];
   //validar tamaño archivo
    if ($size > 120000) {
    echo "El archivo debe ser menor a mb";
    
    }

    if ($tipoArchivo == "jpg" || $tipoArchivo == "jpeg") {
        
        if (move_uploaded_file($_FILES["file"]["tmp_name"],$archivo)) {
            echo "El archivo se subio correctamente";

        }else { 
            echo "hubo un error en la subida";
        }
    }
}
else {
    echo "solo se admite archivos jpg / jpeg";
}

#echo $tipoArchivo;
?>
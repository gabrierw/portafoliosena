<?php 
    include("conexion.php");
    $conexion=conexion();

    $sql="SELECT *  FROM fundacion";
    $query=mysqli_query($conexion,$sql);

    $row=mysqli_fetch_array($query);
?>   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de animales</title>
    <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>


<style>




#edad{


    text-transform:uppercase;

}
#raza{


    text-transform:uppercase;

}
#tipoAnimal{


    text-transform:uppercase;

}


#nombre{

    text-transform:uppercase;


}


</style>
<body>
<div class="container mt-5">

                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form  id="formulario" action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3"  id="nombre"name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3"  id="edad" name="edad" placeholder="edad">
                                    <input type="text" class="form-control mb-3" id="raza" name="raza" placeholder="raza">
                                    <input type="text" class="form-control mb-3"  id="tipoAnimal" name="tipoAnimal" placeholder="tipoAnimal">
                                    
                                    <input type="submit" class="btn btn-primary" value="enviar">
                                </form>
                                <li><a href="index2.php">¿Quieres eliminar informacion?</a></li><br>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>nombre</th>
                                        <th>edad</th>
                                        <th>raza</th>
                                        <th>tipoAnimal</th>
                                        
                                    </tr>
                                      
                                   
                                </thead>


                                <form id="formulario2" action="delete.php" method="POST">
                              
                                </form>
                                <form id="formulario3" action="delete.php">
                                    <a href="pagina_final.php"><input type="button" class="btn btn-info" value="finalizar"></a>
                                </form>



                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['edad']?></th>
                                                <th><?php  echo $row['raza']?></th> 
                                                <th><?php  echo $row['tipoAnimal']?></th>      
                                                                                       
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
</body>
</html>
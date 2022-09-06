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
                                <form  id="formulario" action="delete.php" method="POST">

                                    <input type="text" class="form-control mb-3"  id="identificativo" name="id" placeholder="id">
                                    
                                    
                                    <input type="submit" class="btn btn-danger" value="eliminar">
                                </form>
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
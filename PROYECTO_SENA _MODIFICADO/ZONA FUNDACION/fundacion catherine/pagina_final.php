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
body{
    width: 100%;
height: 100%;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;




}



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

#title{
    width: 100%;
height: 100%;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
-moz-border-radius: 20px;
-webkit-border-radius: 20px;
border-radius: 20px;
-moz-box-shadow: rgb(50,50,50) 10px 10px 10px;
-webkit-box-shadow: rgb(50,50,50) 10px 10px 10px;
box-shadow: rgb(50,50,50) 10px 10px 10px;
background:pink;
padding-left:30%;
}


.col-md-8{

    -moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
-moz-border-radius: 20px;
-webkit-border-radius: 20px;
border-radius: 20px;
padding-left:30%;
}

.table{
    border-radius:30px;

}


.home{

display:flex;
flex-wrap:wrap;


}


body{


    background:#ededed;
}
</style>
<body>
<section class="home">
    <div id="title">


    <h1>¡ Animaloe Nuevas Publicaciones!</h1>
    </div>



<div class="container mt-5">

                    
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


            </section>
</body>
</html>
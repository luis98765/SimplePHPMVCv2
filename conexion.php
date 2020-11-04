<?php 

$conex= mysqli_connect("localhost","root","","c_model");
if(!$conex){
    echo"Error al conectar ";
}else{
    



    $N=$_POST['nombre'];
    $A=$_POST['apellido'];
    $consultas="INSERT INTO c_model(cate_nom,Cate_est) Values ('$N','$A')";
    $consultas2="SELECT * FROM product where cate_nom='$c_model'";
    $verificar=mysqli_query($conex,$consultas2);

    if(mysqli_num_rows($verificar)>0){

     echo"El producto ya esta registrado";

    }
    else{
        $ejecutar=mysqli_query($conex,$consultas);
        if(!$ejecutar){
            echo"No se guardaron los datos";
        }
        else{
            echo"Se guardaron correctamente";

         
           
           
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="mostrar.php" method="POST"></form>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras con fecha de caducidad</title>
</head>
<style media="screen">
    *{ font-family: Bookman Old Style;
        margin-left: 1.5%;
    }
    h1{
        font-weight: bold;
        font-size: 30px; 
        color: rgb(219, 104, 62);
        margin-left: 0.1%;
    }
    a{
        margin-left: 0.1%;
    }
    br{
        font-weight: normal;
    }
</style>
<body>
<?php
session_start();
    if(isset($_SESSION['vinos'])){
        echo "<h1>Lista de productos elegidos: </h1>";
     
     foreach ($_SESSION["vinos"] as $clave => $valor) {
        echo "<br> Código: " .$clave ."<br>";
        foreach($valor as $key => $value){
            echo $key .": ".$value ."<br>";
        }
    }
    echo "<br><a href='index.php'>Regresar a la página anterior</a>";

    }else{
        echo "No existen productos agregados";
        echo "<br><a href='index.php'>Regresar a la página anterior</a>";
    }
     
?>

</body>
</html>
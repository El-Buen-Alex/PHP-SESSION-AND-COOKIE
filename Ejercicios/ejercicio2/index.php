<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras con fecha de caducidad</title>
</head>
<style media="screen">
    *{ font-family: Bookman Old Style;
        margin-left: 1%;
    }

    a{
        margin-left: 2%;
    }


    input[id^='boton']{
        font-family: Bookman Old Style;
            border:none;
            margin-top: 2%;
            background-color: rgb(219, 104, 62);
            color:whitesmoke;
            height:40px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
    }

    input[id^='boton']:hover{
            background-color: #ab49cc;
    }
    .contenedor{
        display: grid;
        grid-template-columns: auto auto;
        justify-content: center;
    }
    .caja{
        margin: 20px;
        width: 160px;
        height: 200px;
        border: 4px solid rgb(219, 104, 62);
        background-color: white;
        text-align: center;
    }
</style>
<body>
    <h1 style="text-align: center; font-size: 30px; color: rgb(219, 104, 62);"> Tienda "Deliciosos vinos" </h1>
    <label><h4>Productos disponibles, escoja uno: </h4></label>
    <div class="contenedor">
        <div class="caja">
            <form action="index.php" method="POST">
                <p>Vino Miraflores</p>
                <img style="width:140px; height: 90px;" src="./resources/img1.jpeg" alt="">
                <input name="vino" value=01 type="hidden">
                <input id="boton2" type="submit" name="Vino Miraflores" value="Agregar Producto">
            </form>
        </div>
        
        <div class="caja">
            <form action="" method="post">
                <p>Vino Indomita</p>
                <img style="width:140px; height: 90px;" src="./resources/img2.jpg" alt="">
                <input name="vino" value=02 type="hidden">
                <input id="boton2" type="submit" value="Agregar Producto">
            </form>
            
        </div>
        <div class="caja">
            <form action="" method="post">
                <p>Vino Sandara</p>
                <img style="width:140px; height: 90px;" src="./resources/img3.jpg" alt="">
                <input name="vino" value=03 type="hidden">
                <input id="boton2" type="submit" value="Agregar Producto">
            </form>
        </div>
        <div class="caja">
            <form action="" method="post">
                <p>Vino La Catedra</p>
                <img style="width:140px; height: 90px;" src="./resources/img4.jpg" alt="">
                <input name="vino" value=04 type="hidden">
                <input id="boton2" type="submit" value="Agregar Producto">
            </form>

        </div>
    </div>
    <div>
        <a style="display: flex; text-align: center; justify-content: center;" href="pagina2Sesion.php">Ver los productos elegidos</a>
    </div>
<?php
$_SESSION["vinos"] = array();

session_start();

    if(isset($_POST['vino'])){
        $vino = $_POST['vino'];
        if($vino == 01){
            $_SESSION["vinos"][$vino]["Nombre"] = "Vino Miraflores";
            $_SESSION["vinos"][$vino]["Tiempo de expiración"] = "2021-07-19";
        }elseif($vino == 02){
            $_SESSION["vinos"][$vino]["Nombre"] = "Vino Indomita";
            $_SESSION["vinos"][$vino]["Tiempo de expiración"] = "2025-12-22";
        }
        elseif($vino == 03){
            $_SESSION["vinos"][$vino]["Nombre"] = "Vino Sandara";
            $_SESSION["vinos"][$vino]["Tiempo de expiración"] = "2028-05-08";
        }
        elseif($vino == 04){
            $_SESSION["vinos"][$vino]["Nombre"] = "Vino La Catedra";
            $_SESSION["vinos"][$vino]["Tiempo de expiración"] = "2022-04-12";
        } 
    }else{
        $vino = "";

    }
     #var_dump($_SESSION["vinos"]);
     #session_destroy();

?>
    
</body>
</html>
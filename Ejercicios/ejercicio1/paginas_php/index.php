<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos_css/estilos.css" type="text/css"> 
    <title>Cinema + | Películas</title>
</head>
<body>
    <header>
    <div class="encabezado">
            <img style="width:180px; height: 90px;"  src="../resources/logo.png" alt="logo">
            <h1 class="mensaje_bienvenido">Bienvenido a Cinema +</h1>
    </div>
    <p class="elige">Selecciona Una Película: </p>
    </header>

    <main>
        <form class="opcion" action="./mostrarPelicula.php" method="POST">
            <select name='pelicula'>
                <option  style="font-family: Bookman Old Style; font-size: 18px;" selected>El Rey León</option>
                <option style="font-family: Bookman Old Style; font-size: 18px;" >La era del hielo</option>
                <option style="font-family: Bookman Old Style; font-size: 18px;" >Bob Sponja: La Película</option>
            </select>
            <input class="boton" type="submit" value="Enviar" name="btnEnviar">
        </form>
    </main>
    
</body>
</html>
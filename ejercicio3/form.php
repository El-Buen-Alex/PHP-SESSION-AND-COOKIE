<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO | EMPRESARIAL</title>
    <style>
        .titulo{
            background-color:antiquewhite;
            text-align: center;
        }
        .contenido{
            padding:3%;
        }
        .subtitulo{
            font-style: italic;
        }
    </style>
</head>
<body>
<header class="titulo">
        <div class="contenido">
            <h1>REGISTRO DE MIEMBRO</h1>
            <span class="subtitulo">MIEMBROS EMPRESARIALES</span>
        </div>
    </header>
    <form action="./registro.php" method="POST">
        <div>
            <label for="nombre">Nombres:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
            <label for="correo">correo Electronico:</label>
            <input type="email" name="correo" id="correo" required> 
        </div>
        <div>
            <label for="genero">Genero:</label>
            <select name='genero' id="genero">
                <option >Masculino</option>
                <option >Femenino</option>
            </select>
        </div>
        <div>
            <input type="submit" name="registrar" id="registrar" value="Registrar">
        </div>
    </form>
</body>
</html>
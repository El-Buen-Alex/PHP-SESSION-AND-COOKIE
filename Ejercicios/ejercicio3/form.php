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
        .contenedorForm{
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
            font-family: Bookman Old Style;
            padding: 2%;
            
        }
        input, textarea, label{
            margin-bottom: 10px;
        }

        .boton{
            padding: 4%;
            width: 100px;
            color: white;
            border-color: #5995fd;
            background: #5995fd;
            
        }

        .boton:hover{
            cursor:pointer;
            border-color: royalblue;
            background: royalblue;
            
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
    <div class="contenedorForm">
    <form action="./registro.php" method="POST">
        <div>
            <label for="nombre">Nombres:</label><br>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <div>
        <label for="correo">correo Electronico:</label><br>
            <input type="email" name="correo" id="correo" required> 
        </div>
        <div>
        <label for="genero">Genero:</label><br>
            <select name='genero' id="genero">
                <option >Masculino</option>
                <option >Femenino</option>
            </select>
        </div>
        <div>
        <br><input class="boton" type="submit" name="registrar" id="registrar" value="Registrar">
        </div>
    </form>
    </div>
   
</body>
</html>
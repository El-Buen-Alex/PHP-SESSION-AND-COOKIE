<?php
    require_once "./miembro.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR LOS MIEMBROS | EMPRESARIAL</title>
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
        #estiloTabla{
            width: 50%;
            text-align: center;
            margin-left:25%;
            padding-top: 2%;
        }
        .cabecera, .numero{
            background-color:whitesmoke;
        }
        .celda{
            border:  white 1px solid;
        }
        .info{
            background-color:lightgray;
        }
        table{
            width: 100%;
            padding-bottom: 5%;
        }
        #cerrarSesion{
            float: right;
            padding-bottom: 3%;
        }
    </style>
</head>
<body>
    <header class="titulo">
        <div class="contenido">
            <h1>LISTA DE MIEMBROS</h1>
            <span class="subtitulo">MIEMBROS EMPRESARIALES</span>
        </div>
    </header>
    <main id="estiloTabla">
            <?php
                echo "<a id='cerrarSesion' href='./cerrar.php'>Cerrar sesión</a>";
                echo "<table>";
                echo "<tr class='cabecera'>";
                echo"<td class='celda'><strong>NUMERO</strong></td>";
                echo"<td class='celda'><strong>NOMBRE</strong></td>";
                echo"<td class='celda'><strong>EMAIL</strong></td>";
                echo"<td class='celda'><strong>GENERO</strong></td>";
                echo "</tr>";
                $lista= array();
                if(isset($_SESSION['lista'])){
                    $lista=$_SESSION['lista'];
                    $numeroMiembro=1;
                    foreach($lista as $miembro){
                        echo "<tr>";
                        echo "<td class='celda numero'>". $numeroMiembro."</td>";
                        echo "<td class='celda info'>". $miembro->getNombre()."</td>";
                        echo "<td class='celda info'>". $miembro->getEmail()."</td>";
                        echo "<td class='celda info'>". $miembro->getGenero()."</td>";
                        echo "</tr>";
                        $numeroMiembro++;
                    }
                }
                echo "</table>";
                
                echo "<a href='./form.php'><input type='button' value='Volver al inicio'></a>"
            ?>
    </main>
</body>
</html>
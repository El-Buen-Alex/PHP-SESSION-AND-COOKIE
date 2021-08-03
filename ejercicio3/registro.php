<?php
    session_start();
    require_once "./miembro.php";
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR MIEMBRO | EMPRESARIAL</title>
</head>
<body>
    <main>
        <?php 
            $resultado="Error";
            if(isset($_POST['registrar'])){
                if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['genero'])){
                    if( !empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['genero'])){
                        $nombreEnv=$_POST['nombre'];
                        $emailEnv=$_POST['correo'];
                        $generoEnv=$_POST['genero'];
                        $miembro= new Miembro($nombreEnv, $emailEnv, $generoEnv);
                        $lista = array();
                        if(isset($_SESSION['lista'])){
                              $lista=$_SESSION['lista'];
                              array_push($lista, $miembro);
                              unset($_SESSION['lista']);
                              $_SESSION['lista']=$lista;
                        }else{
                            array_push($lista, $miembro);
                            $_SESSION['lista']=$lista;
                        }
                        $resultado= "Exito";
                    }
                }
            }
            echo "<h2>".$resultado." al agregar al Nuevo miembro: ".$nombreEnv."</p>";  
        ?>
        <a href="./mostrar.php"><input type="button" value="Mostrar todos"></a>
    </main>
</body>
</html>
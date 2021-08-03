<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas | Elije una</title>
</head>
<body>
    <header>
        <h1>Elije Una Pelicula</h1>
    </header>
    <main>
        <form action="./mostrarPelicula.php" method="POST">
            <select name='pelicula'>
                <option  selected>El rey Leon</option>
                <option >La era del hielo</option>
                <option >Bob Sponja: la Pelicula</option>
            </select>
            <input type="submit" value="Enviar" name="btnEnviar">
        </form>
    </main>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula | Sinopsis</title>
</head>
<body>
    <?php
        $pelicula_elejida=$_POST['pelicula'];
        $sinopsis='';
        $src_img='';
        echo "<h1>".$pelicula_elejida. "</h1>";

        if($pelicula_elejida=='El rey Leon'){
            $src_img="./peliculas/reyleon.jpg";

            $sinopsis='Trata del Reinado de Mufasa el Rey León en una selva de Africa que gobierna con justicia en 
            su territorio,con su leona Sarabi tienen un pequeño cachorro llamado Simba,
            siempre libra una batalla con su hermano Scar quien no podrá ser rey más aún con el nacimiento de su sobrino.';
        }else if($pelicula_elejida=='La era del hielo'){
            $src_img="./peliculas/eradelhielo.jpg";

            $sinopsis='Hace 20.000 años, la Tierra es un lugar prehistórico lleno de peligros, entre ellos el comienzo
             de la Edad de hielo. Para evitar quedarse congelados, las criaturas majestuosas empiezan a migrar hacia el sur.
             Entonces, un grupo de animales muy distintos, 
            entre los que se encuentra un mamut gruñón y un perezoso, deben ayudar a un niño perdido a regresar a su clan';
        }else if($pelicula_elejida=='Bob Sponja: la Pelicula'){
            $src_img="./peliculas/bobsponja.jpg";

            $sinopsis='Es la primera película de la serie de películas de Bob Esponja. En esta película, 
            Plankton diseña un plan para desacreditar a su némesis de negocios, Don Cangrejo, robar la fórmula 
            secreta de la Cangreburguer y 
            conquistar el mundo robando la corona del Rey Neptuno y enmarcando a Don Cangrejo por el crimen.';
        }
        echo "<img src='".$src_img."' alt='imagen de ".$pelicula_elejida."'>";
        echo "<p>".$sinopsis."</p>";

        /*se crea la cookie
        */
        setcookie('peliculaSeleccionada',$pelicula_elejida, time() + 86400);
    ?>
    <form action="./mostrarCookie.php" method="post">
        <input type="submit" value="Mostrar Cookie">
    </form>
</body>
</html>
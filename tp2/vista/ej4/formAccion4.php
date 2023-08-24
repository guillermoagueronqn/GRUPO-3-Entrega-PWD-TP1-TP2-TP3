<?php
    include_once("../../control/Control4.php");
    $objControl4 = new control4();
    $contenido_cine = $objControl4->cinema($_GET,$_FILES);
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <!-- Css -->
        <link rel="stylesheet" type="text/css" href= "../css/style.css">    
</head>
    <body>
        <div id = "resultado_4">
        <h3 id = "title">La pelicula introducida es: </h3><br>
        <?php
        echo "<strong>"."Titulo: "."</strong>".$contenido_cine["titulo"]. "<br>";
        echo "<strong>"."Actores: "."</strong>".$contenido_cine["actores"] . "<br>";
        echo "<strong>"."Director: "."</strong>".$contenido_cine["director"] . "<br>";
        echo "<strong>"."Guion: "."</strong>".$contenido_cine["guion"] . "<br>";
        echo "<strong>"."Produccion: "."</strong>".$contenido_cine["produccion"] . "<br>";
        echo "<strong>"."Año: "."</strong>".$contenido_cine["year"] . "<br>";
        echo "<strong>"."Nacionalidad: "."</strong>".$contenido_cine["nacionalidad"] . "<br>";
        echo "<strong>"."Género: "."</strong>".$contenido_cine["genero"] . "<br>";
        echo "<strong>"."Duración: "."</strong>".$contenido_cine["duracion"] . "<br>";
        if($contenido_cine["restriccion"] == "a"){
            echo "<strong>"."Restricción de edad:"."</strong>"." Todo los públicos <br>";
        }
        elseif($contenido_cine["restriccion"] == "b"){
            echo "<strong>"."Restricción de edad:"."</strong>"." Mayores de 7 años <br>";
        }
        else{
            echo "<strong>"."Restricción de edad: "."</strong>"."Mayores de 18 años <br>";
        }
        echo "<strong>"."Sinópsis: "."</strong>".$contenido_cine["sinopsis"]."<br>";
        ?>
        </div>
    </body>
</html>
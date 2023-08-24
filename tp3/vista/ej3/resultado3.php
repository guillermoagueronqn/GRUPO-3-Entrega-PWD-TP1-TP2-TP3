<?php
    include_once("../../control/formAccion.php");
    $cinema_obj = new control3();
    $contenido_cine = $cinema_obj->cinema($_POST,$_FILES);
    $dir = "archivos/";
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
        if ($contenido_cine["imagen"] != "error. No se ha subido ninguna foto"){
            if (!copy($contenido_cine["imagen"], $dir.$_FILES["mi_imagen"]["name"])){
                echo "<h3 align='center'>ERROR: no se pudo cargar el archivo</h3>";
            } else {
                //echo "<h3 align='center'>El archivo " . $_FILES['mi_imagen']["name"] . " se ha copiado con Éxito</h3>";
                echo "<img src='../ej3/archivos/" . $_FILES['mi_imagen']["name"] . "' style='height:250px; width:300px'>" . "<br>";
            }
        } else {
            echo "<h3>" . $contenido_cine["imagen"] . "</h3>";
        }
        ?>
        </div>
    </body>
</html>
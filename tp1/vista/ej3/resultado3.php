<?php
    include_once("../../control/formAccion.php");
    $objControl3 = new Control3();
    $datos = $objControl3 -> infoForm();
?>

<html>
    <head>
        <title>Ejercicio 3 Resultado</title>
    </head>
    <body>
        <?php
            echo "Hola, yo soy " . $datos["nombre"] . ", " . $datos["apellido"] . " tengo " . $datos["edad"] . " año/s y vivo en " . $datos["direccion"] . ". <br>";
        ?>
    </body>
</html>
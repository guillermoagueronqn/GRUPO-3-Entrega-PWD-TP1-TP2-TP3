<?php
    include_once("../../control/Control2_3.php");
    $objControl2_3 = new Control2_3();
    $datos = $objControl2_3 -> infoForm();
?>

<html>
    <head>
        <title>Ejercicio 2_3 Resultado</title>
    </head>
    <body>
        <?php
            echo "Hola, yo soy " . $datos["nombre"] . ", " . $datos["apellido"] . " tengo " . $datos["edad"] . " año/s y vivo en " . $datos["direccion"] . ". <br>";
        ?>
    </body>
</html>
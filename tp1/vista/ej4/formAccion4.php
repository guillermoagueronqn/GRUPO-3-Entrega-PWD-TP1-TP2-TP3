<?php
    include_once("../../control/Control3.php");
    include_once("../../control/Control4.php");

    $objControl3 = new Control3();
    $datos = $objControl3 -> infoForm();

    $objControl4 = new Control4();
    $edad = $objControl4 -> esMayor($_GET['edad']);
?>

<html>
    <head>
        <title>Ejercicio 4 Resultado</title>
    </head>
    <body>
        <?php
                echo "Hola, yo soy " . $datos["nombre"] . ", " . $datos["apellido"] . " tengo " . $datos["edad"] . " año/s y vivo en " . $datos["direccion"] . ". <br> <br>";
                if($edad == true) {
                    echo "Soy mayor de edad. <br>";
                } else {
                    echo "Soy menor de edad. <br>";
                }
        ?>
    </body>
</html>
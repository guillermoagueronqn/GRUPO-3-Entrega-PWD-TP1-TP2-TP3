<?php
    include_once("../../control/formAccion.php");

    $objControl2_3 = new Control2_3();
    $datos = $objControl2_3 -> infoForm();

    $objControl2_4 = new Control2_4();
    $edad = $objControl2_4 -> esMayor($_GET['edad']);
?>

<html>
    <head>
        <title>Ejercicio 2_4 Resultado</title>
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
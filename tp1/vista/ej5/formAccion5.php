<?php
    include_once("../../control/Control3.php");
    include_once("../../control/Control4.php");
    include_once("../../control/Control5.php");

    $objControl3 = new Control3();
    $datos = $objControl3 -> infoForm();

    $objControl4 = new Control4();
    $edad = $objControl4 -> esMayor($_GET['edad']);

    $objControl5 = new Control5();
    $datos2 = $objControl5 -> infoForm();
?>

<html>
    <head>
        <title>Ejercicio 5 Resultado</title>
    </head>
    <body>
        <?php
                echo "Hola, yo soy " . $datos["nombre"] . ", " . $datos["apellido"] . " tengo " . $datos["edad"] . " año/s y vivo en " . $datos["direccion"] . ". <br> <br>";
                if($edad == true) {
                    echo "Soy mayor de edad. <br><br>";
                } else {
                    echo "Soy menor de edad. <br><br>";
                }
                if ($datos2["estudio"] == 1) {
                    echo "No tengo estudios";
                } elseif ($datos2["estudio"] == 2) {
                    echo "Tengo estudios primarios";
                } elseif ($datos2["estudio"] == 3) {
                    echo "Tengo estudios secundarios";
                }
                echo " y soy " . $datos2["sexo"] . ". <br>";
        ?>
    </body>
</html>
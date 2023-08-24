<?php
    include_once("../../control/formAccion.php");

    $objControl2_3 = new Control2_3();
    $datos = $objControl2_3 -> infoForm();

    $objControl2_4 = new Control2_4();
    $edad = $objControl2_4 -> esMayor($_GET['edad']);

    $objControl2_5 = new Control2_5();
    $datos2 = $objControl2_5 -> infoForm();
?>

<html>
    <head>
        <title>Ejercicio 2_5 Resultado</title>
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
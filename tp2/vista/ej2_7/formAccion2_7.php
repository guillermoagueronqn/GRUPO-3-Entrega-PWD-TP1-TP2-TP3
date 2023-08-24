<?php
    include_once("../../control/Control2_7.php");
    $objControl2_7 = new Control2_7();
    $datosFormulario = $objControl2_7->retornaInfo($_GET);
?>

<html>
    <head>
        <title>Ejercicio 2_7 Resultado</title>
    </head>
    <body>
        <?php
        echo "Operación seleccionada: " . $datosFormulario["operacion"] . "<br>";
        echo "Operando 1: " . $datosFormulario["operando1"] . "<br>";
        echo "Operando 2: " . $datosFormulario["operando2"] . "<br>";
        echo "Resultado de la operación: " . $datosFormulario["resultado"] . "<br>";
        ?>
    </body>
</html>
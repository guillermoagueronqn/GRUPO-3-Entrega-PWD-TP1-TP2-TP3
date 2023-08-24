<?php
    include_once("../../control/Control7.php");
    $objControl7 = new Control7();
    $datosFormulario = $objControl7->retornaInfo($_GET);
?>

<html>
    <head>
        <title>Ejercicio 7 Resultado</title>
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
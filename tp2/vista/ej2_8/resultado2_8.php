<?php
    include_once("../../control/formAccion.php");
    $objControl2_8 = new Control2_8();
    $resultado = $objControl2_8->retornaPrecioEntrada($_POST);
?>

<html>
    <head>
        <title>Ejercicio 2_8 Resultado</title>
    </head>
    <body>
        <?php
        echo "El precio de tu entrada es de: $" . $resultado;
        ?>
    </body>
</html>
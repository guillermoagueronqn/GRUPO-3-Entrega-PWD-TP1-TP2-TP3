<?php
    include_once("../../control/formAccion.php");
    $objControl8 = new Control8();
    $resultado = $objControl8->retornaPrecioEntrada($_POST);
?>

<html>
    <head>
        <title>Ejercicio 8 Resultado</title>
    </head>
    <body>
        <?php
        echo "El precio de tu entrada es de: $" . $resultado;
        ?>
    </body>
</html>
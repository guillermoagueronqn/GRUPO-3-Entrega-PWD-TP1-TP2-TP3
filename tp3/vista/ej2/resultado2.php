<?php
    include_once("../../control/formAccion.php");
    $objControl2 = new control2();
    $informacion = $objControl2->retornaContenidoArchivo($_FILES["miArchivo"]);
?>

<html>
    <head>
        <title>Ejercicio 2 Resultado</title>
    </head>
    <body>
        <?php
        if ($informacion == "error"){
            echo "El archivo subido no fue txt, por lo que no se podra mostrar en un textarea";
        } else {
            echo "<textarea name='muestraInformacion' rows='30' cols='70'>" . $informacion . "</textarea>";
        }
        ?>
    </body>
</html>
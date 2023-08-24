<?php
    include_once("../../control/formAccion.php");
    $objControl2 = new Control2();
    $totalHoras = $objControl2->suma($_GET);
?>

<html>
    <head>
        <title>Ejercicio 2 Resultado</title>
    </head>
    <body>
        <?php
            echo "<h3 align='center'>Programaci&oacuten Web Din&aacutemica se cursa " . $totalHoras . " horas semanales </h3>";
        ?>
        </body>
</html>
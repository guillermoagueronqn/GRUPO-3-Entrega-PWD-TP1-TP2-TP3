<?php
    include_once("../../control/Control2_2.php");
    $objControl2_2 = new Control2_2();
    $totalHoras = $objControl2_2->suma($_GET);
?>

<html>
    <head>
        <title>Ejercicio2_2 Resultado</title>
    </head>
    <body>
        <?php
            echo "<h3 align='center'>Programaci&oacuten Web Din&aacutemica se cursa " . $totalHoras . " horas semanales </h3>";
        ?>
        </body>
</html>
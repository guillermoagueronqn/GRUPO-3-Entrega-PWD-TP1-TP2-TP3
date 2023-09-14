<?php
    $tituloPagina = "TP 1 - Ejercicio 2 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control2.php");
    $objControl2 = new Control2();
    $totalHoras = $objControl2->suma($_GET);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h3 align='center'>Programaci&oacuten Web Din&aacutemica se cursa " . $totalHoras . " horas semanales </h3>";
        ?>
        </body>
    </div>
</div>

<div id="volver">
    <a href="ejercicio2.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
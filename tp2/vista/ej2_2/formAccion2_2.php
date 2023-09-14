<?php
    $tituloPagina = "TP 2 - Ejercicio 2_2 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control2_2.php");
    $objControl2_2 = new Control2_2();
    $totalHoras = $objControl2_2->suma($_GET);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "<h3 align='center'>Programaci&oacuten Web Din&aacutemica se cursa " . $totalHoras . " horas semanales </h3>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio2_2.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
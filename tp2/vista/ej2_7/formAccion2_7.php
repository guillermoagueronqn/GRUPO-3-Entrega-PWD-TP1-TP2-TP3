<?php
    $tituloPagina = "TP 2 - Ejercicio 2_7 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control2_7.php");
    $objControl2_7 = new Control2_7();
    $datosFormulario = $objControl2_7->retornaInfo($_GET);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
        echo "Operación seleccionada: " . $datosFormulario["operacion"] . "<br>";
        echo "Operando 1: " . $datosFormulario["operando1"] . "<br>";
        echo "Operando 2: " . $datosFormulario["operando2"] . "<br>";
        echo "Resultado de la operación: " . $datosFormulario["resultado"] . "<br>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio2_7.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
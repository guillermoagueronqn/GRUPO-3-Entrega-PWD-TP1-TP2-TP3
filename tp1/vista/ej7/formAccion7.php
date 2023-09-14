<?php
    $tituloPagina = "TP 1 - Ejercicio 7 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control7.php");
    $objControl7 = new Control7();
    $datosFormulario = $objControl7->retornaInfo($_GET);
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
    <a href="ejercicio7.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
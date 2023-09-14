<?php
    $tituloPagina = "TP 2 - Ejercicio 2_8 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control2_8.php");
    $objControl2_8 = new Control2_8();
    $resultado = $objControl2_8->retornaPrecioEntrada($_POST);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
        echo "El precio de tu entrada es de: $" . $resultado;
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio2_8.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
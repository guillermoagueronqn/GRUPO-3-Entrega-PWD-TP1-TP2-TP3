<?php
    $tituloPagina = "TP 1 - Ejercicio 8 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control8.php");
    $objControl8 = new Control8();
    $resultado = $objControl8->retornaPrecioEntrada($_POST);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
        echo "El precio de tu entrada es de: $" . $resultado;
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio8.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
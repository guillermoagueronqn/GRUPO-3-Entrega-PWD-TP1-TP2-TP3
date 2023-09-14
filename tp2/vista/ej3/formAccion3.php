<?php
    $tituloPagina = "TP 2 - Ejercicio 3 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control3.php");
    $objControl3 = new Control3();
    $mensaje = $objControl3->validarUsuario($_GET);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo $mensaje;
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio3.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
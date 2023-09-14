<?php

    $tituloPagina = "Auto (Resultado Borrar)";
    include_once("../estructura/encabezado.php");

    include_once '../../configuracion.php';
    $datos = data_submitted();
    $resp = false;
    $objTrans = new AbmAuto();
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'borrar') {
            if ($objTrans->baja($datos)) {
                $resp = true;
            }
        }
        if ($resp) {
            $mensaje = "La acción " . $datos['accion'] . " se realizó correctamente.";
        } else {
            $mensaje = "La acción " . $datos['accion'] . " no pudo concretarse.";
        }
    }

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Auto (Resultado Borrar)</h3>
        <?php	
            echo "<br>" . $mensaje;
        ?>
    </div>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver al Índice</a>
</div>

<?php
    include_once("../estructura/pie.php");
?>
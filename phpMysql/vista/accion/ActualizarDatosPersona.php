<?php

    $tituloPagina = "Persona (Resultado Actualizar)";
    include_once("../estructura/encabezado.php");

    include_once '../../configuracion.php';
    $datos = data_submitted();
    $resp = false;
    $objTrans = new AbmPersona();
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'editar') {
            if ($objTrans->modificacion($datos)) {
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
        <h3>Persona (Resultado Editar)</h3>

        <?php	
            echo $mensaje;
        ?>
        <br><a href="../ejercicios/BuscarPersona.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
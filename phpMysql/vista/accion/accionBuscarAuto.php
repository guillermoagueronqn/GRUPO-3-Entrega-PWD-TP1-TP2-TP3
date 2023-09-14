<?php

    $tituloPagina = "Auto (Resultado Búsqueda)";
    include_once("../estructura/encabezado.php");

    include_once '../../configuracion.php';
    $datos = data_submitted();
    $resp = false;
    $objTrans = new AbmAuto();
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'buscar') {
            if ($arreglo = $objTrans->buscar($datos)) {
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
        <h3>Auto (Resultado Búsqueda)</h3>
        <?php	
            echo "<br>" . $mensaje . "<br><br>";
            if (count($arreglo) > 0){
                if (isset($arreglo)){
                    echo "<b>Patente del auto ingresado:</b> " . $arreglo[0]->getPatente() . "<br>";
                    echo "<b>Marca del auto:</b> " . $arreglo[0]->getMarca() . "<br>";
                    echo "<b>Modelo del auto:</b> " . $arreglo[0]->getModelo() . "<br>";
                    echo "<b>Dni del dueño del auto:</b> " . $arreglo[0]->getObjDniDuenio()->getNroDni() . "<br>";
                    echo "<b>Nombre del dueño del auto:</b> " . $arreglo[0]->getObjDniDuenio()->getNombre() . "<br>";
                }    
            } else {
                echo "No existe un auto con la patente ingresada";
            }
        ?>
        <div class = "btn-ejercicio3">
		<a href="../ejercicios/buscarAuto.php"><button class = "btn btn-primary">Volver</button></a>
		</div>
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>
<?php
    include_once("../estructura/pie.php");
?>
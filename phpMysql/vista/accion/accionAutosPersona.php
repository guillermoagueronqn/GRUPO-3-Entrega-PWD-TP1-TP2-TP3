<?php

    $tituloPagina = "Persona (Resultado Autos por Persona)";
    include_once("../estructura/encabezado.php");

    include_once '../../configuracion.php';
    $objAbmPersona = new AbmPersona();
    $datos = data_submitted();
    $obj = null;
    $resp = false;
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'buscar') {
            $listaPersona = $objAbmPersona->buscar($datos);
            if (count($listaPersona) == 1) {
                $obj = $listaPersona[0];
                $resp = true;
            }
        }
        if ($resp) {
            $mensaje1 = "La acción " . $datos['accion'] . " se realizó correctamente.";
        } else {
            $mensaje1 = "La acción " . $datos['accion'] . " no pudo concretarse.";
        }
    }

    $resp = false;
    $objTrans = new AbmAuto();
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'buscar') {
            $datos['DniDuenio'] = $datos['NroDni'];
            if ($arreglo = $objTrans->buscar($datos)) {
                $resp = true;
            }
        }
        if ($resp) {
            $mensaje2 = "La acción " . $datos['accion'] . " se realizó correctamente.";
        } else {
            $mensaje2 = "La acción " . $datos['accion'] . " no pudo concretarse.";
        }
    }

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Persona (Resultado Autos por Persona)</h3>
        <?php
            if ($obj != null) {
                echo '<b>DNI:</b> ' . $obj->getNroDni() . '<br>';
                echo '<b>Apellido:</b> ' . $obj->getApellido() . '<br>';
                echo '<b>Nombre:</b> ' . $obj->getNombre() . '<br>';
                echo '<b>Fecha de Nacimiento:</b> ' . $obj->getFechaNac() . '<br>';
                echo '<b>Teléfono:</b> ' . $obj->getTelefono() . '<br>';
                echo '<b>Domicilio:</b> ' . $obj->getDomicilio() . '<br>';
                echo '<b>Lista de Autos que le pertenecen:</b> <br>';
                if (count($arreglo) > 0) {
                    foreach ($arreglo as $objAuto) { 
                        echo '<table border="1">';
                        echo '<tr><td style="width:500px;"> <b>Patente:</b> ' . $objAuto->getPatente() . '</td>';
                        echo '<tr><td style="width:500px;"> <b>Marca:</b> ' . $objAuto->getMarca() . '</td>';
                        echo '<tr><td style="width:500px;"> <b>Modelo:</b> ' . $objAuto->getModelo() . '</td>';
                        echo '</table> <br>';
                    }
                } else {
                    echo "<h3>No posee autos actualmente.</h3>";
                }
            } else {
                echo "No existe una persona con el dni ingresado";
            }
            echo '<div class = "btn-ejercicio3">' .
            '<a href="../ejercicios/autosPersona.php"><button class = "btn btn-primary">Volver</button></a>'.
            '</div>';
        ?> 
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
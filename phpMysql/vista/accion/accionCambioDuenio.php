<?php

    $tituloPagina = "Auto (Resultado Cambio Dueño)";
    include_once("../estructura/encabezado.php");

    include_once '../../configuracion.php';
    $datos = data_submitted();
    $resp = false;
    $objTrans = new AbmAuto();
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'editar') {
            $objTransPersona = new AbmPersona();
            if ($arregloAutos = $objTrans->buscar(null)) {
                $autoEncontrado = false;
                $i = 0;
                while ($i < count($arregloAutos) && !$autoEncontrado) {
                    if($arregloAutos[$i]->getPatente() == $datos['Patente']) {
                        $autoEncontrado = true;
                        $objAutoEncontrado = $arregloAutos[$i];
                    } else {
                        $i++;
                    }
                }
                if ($autoEncontrado) {
                    if ($arreglo = $objTransPersona->buscar(null)) {
                        $personaEncontrada = false;
                        $i = 0;
                        while ($i < count($arreglo) && !$personaEncontrada) {
                            if ($arreglo[$i]->getNroDni() == $datos["DniDuenio"]) {
                                $personaEncontrada = true;
                            } else {
                                $i++;
                            }
                        }
                        if ($personaEncontrada) {
                            if ($objAutoEncontrado->getObjDniDuenio()->getNroDni() != $datos['DniDuenio']) {
                                if ($objTrans->modificacion($datos)) { 
                                    $mensaje = "La accion se realizo correctamente!";
                                }
                            } else {
                                $mensaje = "Se está ingresando el DNI del dueño actual del auto, debe elegir uno distinto.";
                            }
                        } else {
                            $mensaje = "No se encontró la persona.";
                            $mensaje .= "<br> <a href='../NuevaPersona.php'>Crear persona</a>";
                        }
                    }
                } else {
                    $mensaje = "El auto no existe en la base de datos.";
                }
            } else {
                $mensaje = "No existen autos en la base de datos.";
            }
        }
    }

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Auto (Resultado Cambio Dueño)</h3>
        <?php	
            echo $mensaje;
        ?>
        <br><a href="../ejercicios/CambioDuenio.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
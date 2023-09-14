<?php

    $tituloPagina = "Auto (Resultado Nuevo)";
    include_once("../estructura/encabezado.php");

    include_once '../../configuracion.php';
    $datos = data_submitted();
    $resp = false;
    $objTrans = new AbmAuto();
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'nuevo') {
            $objTransPersona = new AbmPersona();
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
                if ($personaEncontrada){
                    if ($arregloAutos = $objTrans->buscar(null)){
                        $autoEncontrado = false;
                        $i = 0;
                        while ($i < count($arregloAutos) && !$autoEncontrado) {
                            if($arregloAutos[$i]->getPatente() == $datos['Patente']) {
                                $autoEncontrado = true;
                            } else {
                                $i++;
                            }
                        }
                        if (!$autoEncontrado) {
                            if ($objTrans->alta($datos)) { 
                                $mensaje = "La accion se realizo correctamente!";
                            }
                        } else {
                            $mensaje = "El auto ya existe en la base de datos, elija una patente distinta.";
                        }
                    }
                } else {
                    $mensaje = "No se encontró la persona.";
                    $mensaje .= "<br> <a href='../ejercicios/NuevaPersona.php'>Crear persona</a>";
                }
            }
        }
    }

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Auto (Resultado Nuevo)</h3>
        <?php	
            echo $mensaje;
        ?>
        <br><a href="../ejercicios/NuevoAuto.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
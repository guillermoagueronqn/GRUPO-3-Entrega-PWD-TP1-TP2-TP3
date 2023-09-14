<?php

    $tituloPagina = "Persona (Resultado Nueva)";
    include_once("../estructura/encabezado.php");

    include_once '../../configuracion.php';
    $datos = data_submitted();
    $resp = false;
    $objTrans = new AbmPersona();
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'nuevo') {
            $arregloPersonas = $objTrans->buscar(null);
            $personaEncontrada = false;
            $i = 0;
            while ($i < count($arregloPersonas) && !$personaEncontrada){
                if ($arregloPersonas[$i]->getNroDni() == $datos["NroDni"]){
                    $personaEncontrada = true;
                } else {
                    $i++;
                }
            }
            if (!$personaEncontrada){
                if ($objTrans->alta($datos)) {
                    $resp = true;
                    $mensaje = "Se ha cargado la nueva persona con exito!";
                }
            } else {
                $mensaje = "Ya existe una persona con el dni ingresado. Debe ingresar un dni distinto";
            }
        }
    }

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Persona (Resultado Nueva)</h3>
        <?php	
            echo $mensaje;
        ?>
        <br><a href="../ejercicios/NuevaPersona.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
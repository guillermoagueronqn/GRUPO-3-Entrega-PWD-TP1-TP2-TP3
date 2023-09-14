<?php

    $tituloPagina = "Persona (Resultado Borrar)";
    include_once("../estructura/encabezado.php");

    include_once '../../configuracion.php';
    $datos = data_submitted();
    $resp = false;
    $objTrans = new AbmPersona();
    $objTransAuto = new AbmAuto();
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'borrar') {
            $arregloAutos = $objTransAuto->buscar(null);
            if ($arregloAutos){
                $i = 0;
                $personaEncontrada = false;
                while($i < count($arregloAutos) && !$personaEncontrada){
                    if ($arregloAutos[$i]->getObjDniDuenio()->getNroDni() == $datos["NroDni"]){
                        $personaEncontrada = true;
                    } else {
                        $i++;
                    }
                }
                if ($personaEncontrada){
                    $mensaje = "No se puede eliminar la persona porque es dueña de un auto. Primero debe borrar el auto.";
                } else {
                    if ($objTrans->baja($datos)) {
                        $mensaje = "Se ha eliminado la persona correctamente.";
                    }
                }
            } else {
                if ($objTrans->baja($datos)) {
                    $mensaje = "Se ha eliminado la persona correctamente.";
                }
            }
        }
    }

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Persona (Resultado Borrar)</h3>
        <?php	
            echo $mensaje;
            echo "<br><br>";
            echo '<a href="../ejercicios/listaPersonas.php"><button class = "btn btn-primary">Volver</button></a>';
        ?>
    </div>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
</div>

<?php
    include_once("../estructura/pie.php");
?>
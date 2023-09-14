<?php
    $tituloPagina = "TP 1 - Ejercicio 3 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../util/funciones.php");
    $datos = data_submitted();
    
    include_once("../../control/Control3.php");
    $objControl3 = new Control3();
    $info = $objControl3 -> infoForm($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            echo "Hola, yo soy " . $info["nombre"] . ", " . $info["apellido"] . " tengo " . $info["edad"] . " año/s y vivo en " . $info["direccion"] . ". <br>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio3.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
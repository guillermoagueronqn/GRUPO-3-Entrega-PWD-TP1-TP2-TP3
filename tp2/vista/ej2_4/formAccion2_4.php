<?php
    $tituloPagina = "TP 2 - Ejercicio 2_4 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../util/funciones.php");
    $datos = data_submitted();

    include_once("../../control/Control2_3.php");
    $objControl2_3 = new Control2_3();
    $info = $objControl2_3 -> infoForm($datos);

    include_once("../../control/Control2_4.php");
    $objControl2_4 = new Control2_4();
    $edad = $objControl2_4 -> esMayor($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
                echo "Hola, yo soy " . $info["nombre"] . ", " . $info["apellido"] . " tengo " . $info["edad"] . " año/s y vivo en " . $info["direccion"] . ". <br> <br>";
                if($edad == true) {
                    echo "Soy mayor de edad. <br>";
                } else {
                    echo "Soy menor de edad. <br>";
                }
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio2_4.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
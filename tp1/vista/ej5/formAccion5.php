<?php
    $tituloPagina = "TP 1 - Ejercicio 5 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../util/funciones.php");
    $datos = data_submitted();

    include_once("../../control/Control3.php");
    $objControl3 = new Control3();
    $info = $objControl3 -> infoForm($datos);

    include_once("../../control/Control4.php");
    $objControl4 = new Control4();
    $edad = $objControl4 -> esMayor($datos);

    include_once("../../control/Control5.php");
    $objControl5 = new Control5();
    $datos2 = $objControl5 -> infoForm($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
                echo "Hola, yo soy " . $info["nombre"] . ", " . $info["apellido"] . " tengo " . $info["edad"] . " año/s y vivo en " . $info["direccion"] . ". <br> <br>";
                if($edad == true) {
                    echo "Soy mayor de edad. <br><br>";
                } else {
                    echo "Soy menor de edad. <br><br>";
                }
                if ($datos2["estudio"] == 1) {
                    echo "No tengo estudios";
                } elseif ($datos2["estudio"] == 2) {
                    echo "Tengo estudios primarios";
                } elseif ($datos2["estudio"] == 3) {
                    echo "Tengo estudios secundarios";
                }
                echo " y soy " . $datos2["sexo"] . ". <br>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio5.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
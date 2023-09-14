<?php
    $tituloPagina = "TP 2 - Ejercicio 2_6 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../util/funciones.php");
    $datos = data_submitted();

    include_once("../../control/Control2_3.php");
    $objControl2_3 = new Control2_3();
    $info = $objControl2_3 -> infoForm($datos);

    include_once("../../control/Control2_4.php");
    $objControl2_4 = new Control2_4();
    $edad = $objControl2_4 -> esMayor($datos);

    include_once("../../control/Control2_5.php");
    $objControl2_5 = new Control2_5();
    $datos2 = $objControl2_5 -> infoForm($datos);

    include_once("../../control/Control2_6.php");
    $objControl2_6 = new Control2_6();
    $cantDeportes = $objControl2_6 -> cantDeportes($datos);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
                echo "Hola, yo soy " . $datos["nombre"] . ", " . $datos["apellido"] . " tengo " . $info["edad"] . " año/s y vivo en " . $info["direccion"] . ". <br> <br>";
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
                echo " y soy " . $datos2["sexo"] . ". <br><br>";
                echo "Practico " . $cantDeportes . " deporte/s. <br>";
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio2_6.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
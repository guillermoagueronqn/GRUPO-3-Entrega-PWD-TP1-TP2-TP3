<?php
    $tituloPagina = "TP 3 - Ejercicio 2 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control2.php");
    $objControl2 = new control2();
    $informacion = $objControl2->retornaContenidoArchivo($_FILES["miArchivo"]);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
        if ($informacion == "error"){
            echo "El archivo subido no fue txt, por lo que no se podrá mostrar en un textarea";
        } else {
            echo "<textarea name='muestraInformacion' rows='25' cols='70'>" . $informacion . "</textarea>";
        }
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio2.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
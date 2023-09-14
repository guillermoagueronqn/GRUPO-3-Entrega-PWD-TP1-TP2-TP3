<?php
    $tituloPagina = "TP 3 - Ejercicio 1 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control1.php");
    $objControl1 = new Control1();
    $archivo = $objControl1->miArchivo($_FILES['archivo']);
    $dir = '../../archivos/';
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($archivo == "exito"){
                if(!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])){
                    echo "<h3 align='center'>ERROR: no se pudo cargar el archivo</h3>";
                }else{
                    echo "<h3 align='center'>El archivo " . $_FILES['archivo']["name"] . " se ha copiado con Éxito</h3>";
                }
            }else{
                echo "<h3 align='center'>" . $archivo . "</h3";
            }
        ?>
        <h3 align='center'><a href='../../archivos/'> Ver archivo cargado</a></h3>
    </div>
</div>

<div id="volver">
    <a href="ejercicio1.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
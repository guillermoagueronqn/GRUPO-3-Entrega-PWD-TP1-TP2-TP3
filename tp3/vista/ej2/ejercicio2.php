<?php
    $tituloPagina = "TP 3 - Ejercicio 2";
    include_once("../encabezado.php");
?>

<div id="ejercicio">
    <form align="center" action="formAccion2.php" method="post" id="ejercicioFormulario" name="formulario" enctype="multipart/form-data">
        <input type="file" name="miArchivo" id="miArchivo"> <br><br>
        <input type="submit" value="Enviar" name="Submit">
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
<?php
    $tituloPagina = "TP 1 - Ejercicio 8";
    include_once("../encabezado.php");
?>

<div id="ejercicio">
    <form action="formAccion8.php" method="post" name="formulario" id="ejercicioFormulario" onsubmit="return validar8();">
        <label for="edad">Edad: </label>
        <input type="text" name="edad" id="edad"> <br>
        <h3>¿Eres estudiante?</h3>
        SI<input type="radio" name="esEstudiante" value="si"><br>
        NO<input type="radio" name="esEstudiante" checked value="no"><br>
        <input type="submit" value="Enviar" name="Submit">
        <input type="reset" value="Limpiar" name="Reset">
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
<?php
    $tituloPagina = "TP 1 - Ejercicio 2";
    include_once("../encabezado.php");
?>

<div id="ejercicio">
    <form align="center" id="ejercicioFormulario" name="ejercicio2" method="get" action="formAccion2.php" onsubmit="return validarCampos();">
        <h3>Ingrese las horas por dia de Programaci&oacute;n Web Din&aacute;mica</h3>
        <h3>Lunes:</h3><input id="lunes" name="lunes">
        <h3>Martes:</h3><input id="martes" name="martes">
        <h3>Miercoles:</h3><input id="miercoles" name="miercoles">
        <h3>Jueves:</h3><input id="jueves" name="jueves">
        <h3>Viernes:</h3><input id="viernes" name="viernes"><br><br>
        <input type="submit" id="submit" name="submit"value="Aceptar"/><br>
        <h4><div id="error"></div></h4>
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
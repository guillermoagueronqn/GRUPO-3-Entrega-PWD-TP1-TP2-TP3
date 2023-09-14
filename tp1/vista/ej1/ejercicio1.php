<?php
    $tituloPagina = "TP 1 - Ejercicio 1";
    include_once("../encabezado.php");
?>

<div id="ejercicio">
    <form align="center" name="ejercicio1" id="ejercicioFormulario" method="get" action="formAccion1.php" onsubmit="return validarNumero();">
        <h3>Ingrese un Numero </h3><input name="numero" id="numero"><br><br>
        <input type="submit" name="submit" id="submit" value="Aceptar"/>
        <div id="error" style="display: none;"><h4>Necesita ingresar un numero</h4></div>
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
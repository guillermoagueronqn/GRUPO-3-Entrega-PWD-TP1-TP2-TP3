<?php
    $tituloPagina = "TP 1 - Ejercicio 7";
    include_once("../encabezado.php");
?>

<div id="ejercicio">
    <form action="formAccion7.php" method="get" name="formulario" id="ejercicioFormulario" onsubmit="return validar7();">
        <input type="text" name="numeroA" id="numeroA"> <br>
        <input type="text" name="numeroB" id="numeroB"> <br>
        <select name="operacion" id="operacion">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
            <option value="division">DIVISION</option>
        </select>
        <input type="submit" value="Enviar" name="Submit">
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
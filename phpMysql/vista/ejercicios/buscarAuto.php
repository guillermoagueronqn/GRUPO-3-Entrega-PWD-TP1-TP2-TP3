<?php

    $tituloPagina = "TP 4 - Ejercicio 4 (buscarAuto.php)";
    include_once("../estructura/encabezado.php");

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Auto (Buscar)</h3>
        <form method="post" action="../accion/accionBuscarAuto.php" class="was-validated">
            <div class="form-group">
                <label for="Patente">Patente:</label><br/>
                <input id="Patente" name="Patente" type="text" class="form-control" required pattern="[A-Z]{3} \d{3}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    La patente es 3 letras mayúsculas, espacio y 3 números.
                </div>
            </div>
            <br>
            <input id="accion" name="accion" value="buscar" type="hidden">
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
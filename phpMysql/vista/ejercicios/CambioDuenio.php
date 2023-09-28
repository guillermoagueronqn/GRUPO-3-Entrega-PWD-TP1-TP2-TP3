<?php

    $tituloPagina = "TP 4 - Ejercicio 8 (CambioDuenio.php)";
    include_once("../estructura/encabezado.php");

    include_once "../../configuracion.php";
    $objAbmAuto = new AbmAuto();

    $listaAuto = $objAbmAuto->buscar(null);

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Auto (Cambio Dueño)</h3>
        <form method="post" action="../accion/accionCambioDuenio.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="Patente">Patente:</label><br/>
                <input id="Patente" name="Patente" width="80" type="text" class="form-control" required pattern="[A-Z]{3} \d{3}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    La patente es 3 letras mayúsculas, espacio y 3 números.
                </div>
            </div>
            <br/>
            <div class="form-group">
                <label>DNI del Dueño:</label><br/>
                <input type="text" id="DniDuenio" name="DniDuenio" class="form-control" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El DNI consta de 8 números.
                </div>
            </div>
            <br/>
            <input id="accion" name ="accion" value="editar" type="hidden">
            <input type="submit" class="btn btn-primary">
        </form>
        <script src="../js/function4.js"></script>
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
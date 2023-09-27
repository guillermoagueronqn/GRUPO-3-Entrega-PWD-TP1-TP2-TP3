<?php

    $tituloPagina = "TP 4 - Ejercicio 7 (NuevoAuto.php)";
    include_once("../estructura/encabezado.php");

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Auto (Nuevo)</h3>
        <form method="post" action="../accion/accionNuevoAuto.php" class="was-validated">
            <div class="form-group">
                <label for="Patente">Patente:</label>
                <input id="Patente" name="Patente" type="text" class="form-control" required pattern="[A-Z]{3} \d{3}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    La patente es 3 letras mayúsculas, espacio y 3 números.
                </div>
            </div>
            <div class="form-group">
                <label for="Marca">Marca:</label>
                <input id="Marca" name="Marca" type="text" class="form-control" required pattern="[A-Za-z][A-Za-z0-9 ]*">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El primer caracter de la marca debe ser una letra.
                </div>
            </div>
            <div class="form-group">
                <label for="Modelo">Modelo:</label>
                <input id="Modelo" name="Modelo" type="text" class="form-control" required pattern="[0-9]{1,4}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El modelo debe ser entre 1 y 4 números.
                </div>
            </div>
            <div class="form-group">
                <label for="DniDuenio">DNI del Dueño:</label>
                <input id="DniDuenio" name="DniDuenio" type="text" class="form-control" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    El DNI consta de 8 números.
                </div>
            </div>
            <br>
            <input id="accion" name="accion" value="nuevo" type="hidden">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>


<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
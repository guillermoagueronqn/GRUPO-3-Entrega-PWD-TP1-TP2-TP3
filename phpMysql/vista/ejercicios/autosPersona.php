<?php

    $tituloPagina = "TP 4 - Ejercicio 5 (autosPersona.php)";
    include_once("../estructura/encabezado.php");

    include_once "../../configuracion.php";
    $objAbmPersona = new AbmPersona();

    $listaPersona = $objAbmPersona->buscar(null);

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Persona (Autos Por Persona)</h3>
        <form method="post" action="../accion/accionAutosPersona.php" class="was-validated">
            <div class="form-group">
                <label>DNI:</label><br/>
                <input id="NroDni" name="NroDni" class="form-control" type="text" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese un DNI de 8 digitos.
                </div>
            </div>
            <br/>
            <input id="accion" name ="accion" value="buscar" type="hidden">
            <input type="submit" class="btn btn-primary">
        </form>
        <br><a href="listaPersonas.php"><button class = "btn btn-primary">Volver</button></a>
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
<?php

    $tituloPagina = "TP 4 - Ejercicio 9 (BuscarPersona.php)";
    include_once("../estructura/encabezado.php");

?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <h3>Persona (Buscar)</h3>
        <form method="post" action="../accion/accionBuscarPersona.php" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="">DNI:</label><br/>
                <input id="NroDni" name="NroDni" class="form-control" type="text" required pattern="[0-9]{8}">
                <div class="valid-feedback">
                    Correcto.
                </div>
                <div class="invalid-feedback">
                    Ingrese un DNI de 8 números.
                </div>    
            </div>
            <br>
            <input id="accion" name="accion" value="buscar" type="hidden">
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
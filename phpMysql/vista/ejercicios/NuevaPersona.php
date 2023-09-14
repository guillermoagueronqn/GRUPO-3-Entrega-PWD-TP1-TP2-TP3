<?php

    $tituloPagina = "TP 4 - Ejercicio 6 (NuevaPersona.php)";
    include_once("../estructura/encabezado.php");

?>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
    <div id="ejercicio">
    <div id="ejercicioFormulario2">
        <h3>Persona (Nueva)</h3>
        <form method="post" action="../accion/accionNuevaPersona.php" class="was-validated" onsubmit="return validaNuevaPersona();">
            <div class="form-group">
                <label for="">Número de DNI:</label>
                <input id="NroDni" name="NroDni" class="form-control" type="text" required pattern="[0-9]{8}">
                <div class="invalid-feedback">
                    Ingrese un DNI de 8 digitos.
                </div>
            </div>
            <div class="form-group">
                <label for="">Apellido:</label>
                <input id="Apellido" class="form-control" name="Apellido" type="text" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                <div class="invalid-feedback">
                    Ingrese su apellido.
                </div>
            </div>
            <div class="form-group">
                <label for="">Nombre:</label>
                <input id="Nombre" name="Nombre" class="form-control" type="text" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                <div class="invalid-feedback">
                    Ingrese su nombre.
                </div>
            </div>
            <div class="form-group">
            <label for="">Fecha de Nacimiento:</label><br/>
            <input id="fechaNac" name="fechaNac" class="form-control" type="text" required pattern="^((2000|2400|2800|(19|2[0-9])(0[48]|[2468][048]|[13579][26]))-02-29)|(((19|2[0-9])[0-9]{2})-02-(0[1-9]|1[0-9]|2[0-8]))|(((19|2[0-9])[0-9]{2})-(0[13578]|10|12)-(0[1-9]|[12][0-9]|3[01]))|(((19|2[0-9])[0-9]{2})-(0[469]|11)-(0[1-9]|[12][0-9]|30))$">
                <div class="invalid-feedback">
                    Formato de fecha: "AAAA-MM-DD"
                </div>
            </div>
            <div class="form-group">
                <label for="">Telefono:</label><br/>
                <input id="Telefono" name="Telefono" class="form-control" type="text" required pattern="^[0-9][0-9]{4,}$">
                <div class="invalid-feedback">
                    El número debe tener como mínimo 5 digitos.
                </div>
            </div>
            <div class="form-group">
                <label for="">Domicilio:</label><br/>
                <input id="Domicilio" class="form-control" name="Domicilio" type="text" required pattern="^[a-zA-Z][a-zA-Z0-9\s]*$">
                <div class="invalid-feedback">
                    Ingrese su domicilio.    
                </div>
            </div>
            <br>
            <input id="accion" name="accion" value="nuevo" type="hidden">
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>
    </body>
</html>
<?php
    include_once("../estructura/pie.php");
?>
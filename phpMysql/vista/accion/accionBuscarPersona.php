<?php

    $tituloPagina = "Persona (Resultado Buscar)";
    include_once("../estructura/encabezado.php");

    include_once '../../configuracion.php';
    $objAbmPersona = new AbmPersona();
    $datos = data_submitted();
    $resp = false;
    $obj = null;
    if (isset($datos['accion'])) {
        if ($datos['accion'] == 'buscar') {
            $listaPersona = $objAbmPersona->buscar($datos);
            if (count($listaPersona) == 1) {
                $obj = $listaPersona[0];
                $resp = true;
            }
        }
        if ($resp) {
            $mensaje = "La acción " . $datos['accion'] . " se realizó correctamente.";
        } else {
            $mensaje = "La acción " . $datos['accion'] . " no pudo concretarse.";
        }
    }

?>

<div id="ejercicio">
    <div id="ejercicioFormulario2">
        <h3>Persona (Editar)</h3>
        <?php
            if ($obj != null) {
                ?>
                <form method="post" action="ActualizarDatosPersona.php" class="was-validated" onsubmit="return validaFechaNacimiento();">
                    <div class="form-group">
                        <label>Número de DNI:</label>
                        <input id="NroDni" readonly name="NroDni" class="form-control" width="80" type="text" value="<?php echo $obj->getNroDni()?>" required>
                    </div>
                    
                    <div class="form-group">
                    <label>Apellido:</label><br/>
                    <input id="Apellido" name="Apellido" class="form-control" type="text" value="<?php echo $obj->getApellido()?>" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                            <div class="invalid-feedback">
                                Solo letras.
                            </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="Nombre">Nombre:</label><br/>
                        <input id="Nombre" name="Nombre" class="form-control" type="text" value="<?php echo $obj->getNombre()?>" required pattern="^[a-zA-Z][a-zA-Z\s]*$">
                            <div class="invalid-feedback">
                                Solo letras.
                            </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="fechaNac">Fecha de Nacimiento:</label><br/>
                        <input id="fechaNac" name="fechaNac" class="form-control" type="text" value="<?php echo $obj->getFechaNac()?>" required pattern="^(?!0000)(?:(?!02-29)(([1-9]\d(?:0[48]|[2468][048]|[13579][26])|([2468][048]|[13579][26])00)-02-29)|([1-9]\d{3}|[2-9]\d{3})-(0[1-9]|1[0-2])-(0[1-9]|1\d|2[0-8])|(?:([1-9]\d(?:0[48]|[2468][048]|[13579][26])|([2468][048]|[13579][26])00)-02-(?:29|30))|(?:([1-9]\d{3}|[2-9]\d{3})-(0[13-9]|1[0-2])-(?:29|30|31)))$">
                        <div class="invalid-feedback">
                            Ejemplo: 2000-05-30.
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Teléfono:</label><br/>
                        <input id="Telefono" name="Telefono" class="form-control" type="text" value="<?php echo $obj->getTelefono()?>" required pattern="^[0-9][0-9]{4,}$">
                        <div class="invalid-feedback">
                            Minimo 5 números.
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Domicilio:</label><br/>
                        <input id="Domicilio" name="Domicilio" class="form-control" type="text" value="<?php echo $obj->getDomicilio()?>" required pattern="^[a-zA-Z][a-zA-Z0-9\s]*$">
                        <div class="invalid-feedback">
                            Se aceptan números letras y espacios.
                        </div>
                    </div>
                    <br/>
                    <input id="accion" name ="accion" value="editar" type="hidden">
                    <input type="submit" class="btn btn-primary">
                    </form>
                <?php
            } else {
                echo "<p>No se encontró la persona con el dni ingresado</p>";
            }
            echo '<br><a href="../ejercicios/BuscarPersona.php"><button class = "btn btn-primary">Volver</button></a>';
        ?>
    </div>
</div>

<div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
<?php
    $tituloPagina = "TP 2 - Ejercicio 2_4";
    include_once("../encabezado.php");
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#ejercicioFormulario").validate({
            rules: {
                nombre: {
                    pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                },
                apellido: {
                    pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                },
                edad: {
                    min: 1,
                    max: 120,
                    required: true,
                },
                direccion: {
                    pattern: /^([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                    required: true,
                },
            },
        })
    });
</script>

<div id="ejercicio">
    <form id="ejercicioFormulario" name="form" method="get" action="formAccion2_4.php">
        <table>
            <tr>
                <td class="textForm">Nombre: </td>
                <td><input type="text" name="nombre" id="nombre" class="inputForm" placeholder="Ingrese su nombre"></td>
            </tr>
            <tr>
                <td class="textForm">Apellido: </td>
                <td><input type="text" name="apellido" id="apellido" class="inputForm" placeholder="Ingrese su apellido"></td>
            </tr>
            <tr>
                <td class="textForm">Edad: </td>
                <td><input type="number" name="edad" id="edad" class="inputForm" placeholder="Ingrese su edad"></td>
            </tr>
            <tr>
                <td class="textForm">Dirección: </td>
                <td><input type="text" name="direccion" id="direccion" class="inputForm" placeholder="Ingrese su dirección" pattern="([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*" required></td>
            </tr>
            <tr>
                <td colspan="2"><br><div id="botonEnviar"><input type="submit" name="submit" id="enviar" value="Enviar"></div></td>
            </tr>
        </table>
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
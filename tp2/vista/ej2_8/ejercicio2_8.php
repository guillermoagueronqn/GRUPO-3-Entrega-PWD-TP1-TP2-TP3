<?php
    $tituloPagina = "TP 2 - Ejercicio 2_7";
    include_once("../encabezado.php");
?>

<script type="text/javascript">
    $(function(){
        $("#submit").click(function(){
            var edad = $("#edad").val();
            if (edad > 0 && edad != "" && Number.isInteger(Number(edad))){
                $("#edad").css("borderColor", "green");
            } else {
                event.preventDefault();
                $("#edad").css("borderColor", "red");
            }
        })
    })
</script>

<div id="ejercicio">
    <form action="formAccion2_8.php" method="post" name="formulario" id="ejercicioFormulario">
        <label for="edad">Edad: </label>
        <input type="text" name="edad" id="edad"> <br>
        <h3>¿Eres estudiante?</h3>
        SI<input type="radio" name="esEstudiante" value="si"><br>
        NO<input type="radio" name="esEstudiante" checked value="no"><br>
        <input type="submit" value="Enviar" name="Submit" id="submit">
        <input type="reset" value="Limpiar" name="Reset">
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
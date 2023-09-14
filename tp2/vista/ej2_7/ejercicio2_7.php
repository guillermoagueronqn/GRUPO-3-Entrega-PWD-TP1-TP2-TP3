<?php
    $tituloPagina = "TP 2 - Ejercicio 2_7";
    include_once("../encabezado.php");
?>

<script>
    $(function(){
        $("#submit").click(function(){
            var numeroA = $("#numeroA").val();
            var numeroB = $("#numeroB").val();
            var opcionSeleccionada = $("#operacion").val();
            if ($.isNumeric(numeroA) && numeroA != ""){
                $("#numeroA").css("borderColor", "green");
                if ($.isNumeric(numeroB) && numeroB != ""){
                    $("#numeroB").css("borderColor", "green");
                    if (opcionSeleccionada == "division"){
                        if (numeroB == 0){
                            $("#numeroB").css("borderColor", "red");
                            event.preventDefault();
                        } else {
                            $("#numeroB").css("borderColor", "green");
                        }
                    }
                } else {
                    $("#numeroB").css("borderColor", "red");
                    event.preventDefault();
                }
            } else {
                $("#numeroA").css("borderColor", "red");
                event.preventDefault();
            }
        })
    })
</script>

<div id="ejercicio">
    <form action="formAccion2_7.php" method="get" name="formulario" id="ejercicioFormulario">
        <input type="text" name="numeroA" id="numeroA"> <br>
        <input type="text" name="numeroB" id="numeroB"> <br>
        <select name="operacion" id="operacion">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
            <option value="division">DIVISION</option>
        </select>
        <input type="submit" value="Enviar" name="submit" id="submit">
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
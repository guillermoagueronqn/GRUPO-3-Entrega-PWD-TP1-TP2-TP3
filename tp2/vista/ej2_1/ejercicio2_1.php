<?php
    $tituloPagina = "TP 2 - Ejercicio 2_1";
    include_once("../encabezado.php");
?>

<script type="text/javascript">
    $(function(){
        $("#submit").click(function(){
            var numero = $("#numero").val();
            var esValido = false;
            if(numero == "" || isNaN(numero)){
                $("#numero").css({"border": "1px red solid"});
                $("#error").fadeIn();
            }else{
                $("#numero").css({"border": "1px solid"});
                $("#error").fadeOut();
                esValido = true;
            }
            return esValido;
        });
    });
</script>

<div id="ejercicio">
    <form align="center" name="ejercicio1" id="ejercicioFormulario" method="get" action="formAccion2_1.php">
        <h3>Ingrese un Numero </h3><input name="numero" id="numero"><br><br>
        <input type="submit" name="submit" id="submit" value="Aceptar"/><br><br>
        <div id="error" style="display: none;"><h3>Necesita ingresar un numero</h3></div>
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
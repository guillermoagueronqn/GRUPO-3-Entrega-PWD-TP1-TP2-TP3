<?php
    $tituloPagina = "TP 3 - Ejercicio 1";
    include_once("../encabezado.php");
?>

<script type="text/javascript">
    $(function(){
        $("#submit").click(function(){
            var archivo = $("#archivo").val();
            var esValido = false;
            if(archivo == ""){
                $("#archivo").css({"border": "1px red solid"});
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
    <form align="center" name="ejercicio1" id="ejercicioFormulario" method="post" action="formAccion1.php" enctype="multipart/form-data">
        <h3>Ingrese un Archivo: </h3><input name="archivo" id="archivo" type="file"><br><br>
        <input type="submit" name="submit" id="submit" value="Enviar"/>
        <div id="error" style="display: none;"><h3>Necesita ingresar un archivo</h3></div>
    </form>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
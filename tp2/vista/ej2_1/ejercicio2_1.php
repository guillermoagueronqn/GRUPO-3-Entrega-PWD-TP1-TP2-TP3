<html>
    <head>
        <title>Ejercicio 2_1</title>
    </head>
    <body>
        <script type="text/javascript" src="../js/jquery-3.7.0.min.js"></script>
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
        <form align="center" name="ejercicio1" id="ejercicio1" method="get" action="formAccion2_1.php">
            <h3>Ingrese un Numero </h3><input name="numero" id="numero"><br><br>
            <input type="submit" name="submit" id="submit" value="Aceptar"/><br><br>
            <div id="error" style="display: none;"><h3>Necesita ingresar un numero</h3></div>
        </form>
    </body>
</html>
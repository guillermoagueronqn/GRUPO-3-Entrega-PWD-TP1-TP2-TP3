<html>
    <head>
        <title>Ejercicio 1</title>
        
    </head>
    <body>
        <script type="text/javascript" src="../js/jquery-3.7.0.min.js"></script>
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
        <form align="center" name="ejercicio1" id="ejercicio1" method="post" action="resultado1.php" enctype="multipart/form-data">
            <h3>Ingrese un Archivo: </h3><input name="archivo" id="archivo" type="file"><br><br>
            <input type="submit" name="submit" id="submit" value="Enviar"/>
            <div id="error" style="display: none;"><h3>Necesita ingresar un archivo</h3></div>
        </form>
    </body>
</html>
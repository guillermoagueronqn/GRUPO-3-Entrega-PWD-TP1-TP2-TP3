<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <script type="text/javascript">
            function validarNumero(){
                var $num = document.getElementById("numero");
                var $error = document.getElementById("error");
                var $esNum;
                if(($num.value == "" || isNaN($num.value))){
                    $esNum = false;
                    pintarBordeRojo($num);
                    $error.style.display = "flex";
                    $error.style.justifyContent = "center";
                }else{
                    $esNum = true;
                }
                return $esNum;
            }
            function pintarBordeRojo(elemento){
                elemento.style.border = "1px red solid";
            }
        </script>
        <form align="center" name="ejercicio1" id="ejercicio1" method="get" action="resultado1.php" onsubmit="return validarNumero();">
            <h3>Ingrese un Numero </h3><input name="numero" id="numero"><br><br>
            <input type="submit" name="submit" id="submit" value="Aceptar"/>
            <div id="error" style="display: none;"><h4>Necesita ingresar un numero</h4></div>
        </form>
    </body>
</html>
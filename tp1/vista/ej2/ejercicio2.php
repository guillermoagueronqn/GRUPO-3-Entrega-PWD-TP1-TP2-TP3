<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <script type="text/javascript">
            function validarCampos(){
                var $lunes,$martes,$miercoles,$jueves,$viernes;
                var $resp1=false,$resp2=false,$resp3=false,$resp4=false,$resp5=false,$valido=false;
                $lunes = document.getElementById("lunes");
                $martes = document.getElementById("martes");
                $miercoles = document.getElementById("miercoles");
                $jueves = document.getElementById("jueves");
                $viernes = document.getElementById("viernes");
                $error = document.getElementById("error");

                if($lunes.value == "" || isNaN($lunes.value) || $lunes.value < 0 || $lunes.value > 6){
                    pintaBordeRojo($lunes);
                }else{
                    pintaNormal($lunes);
                    $resp1 = true;
                }

                if($martes.value == "" || isNaN($martes.value) || $martes.value < 0 || $martes.value > 6){
                    pintaBordeRojo($martes);
                }else{
                    pintaNormal($martes);
                    $resp2 = true;
                }

                if($miercoles.value == "" || isNaN($miercoles.value) || $miercoles.value < 0 || $miercoles.value > 6){
                    pintaBordeRojo($miercoles);
                }else{
                    pintaNormal($miercoles);
                    $resp3 = true;
                }

                if($jueves.value == "" || isNaN($jueves.value) || $jueves.value < 0 || $jueves.value > 6){
                    pintaBordeRojo($jueves);
                }else{
                    pintaNormal($jueves);
                    $resp4 = true;
                }

                if($viernes.value == "" || isNaN($viernes.value) || $viernes.value < 0 || $viernes.value > 6){
                    pintaBordeRojo($viernes);
                }else{
                    pintaNormal($viernes);
                    $resp5 = true;
                }

                if($resp1 && $resp2 && $resp3 && $resp4 && $resp5){
                    $valido = true;
                }else{
                    error($error);
                }

                console.log($valido);

                return $valido;
            }

            function pintaBordeRojo(elemento){
                elemento.style.border = "1px red solid";
            }

            function pintaNormal(elemento){
                elemento.style.border = "1px solid";
            }

            function error(error){
                error.innerHTML = "<li>Debe ingresar un numero del 0 al 6 en los campos</li>";
            }
        </script>
        <form align="center" id="ejercicio2" name="ejercicio2" method="get" action="resultado2.php" onsubmit="return validarCampos();">
            <h3>Ingrese las horas por dia de Programaci&oacute;n Web Din&aacute;mica</h3>
            <h3>Lunes:</h3><input id="lunes" name="lunes">
            <h3>Martes:</h3><input id="martes" name="martes">
            <h3>Miercoles:</h3><input id="miercoles" name="miercoles">
            <h3>Jueves:</h3><input id="jueves" name="jueves">
            <h3>Viernes:</h3><input id="viernes" name="viernes"><br><br>
            <input type="submit" id="submit" name="submit"value="Aceptar"/><br>
            <h4><div id="error"></div></h4>
        </form>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2_7</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>
<body>
    <script>
        $(document).ready(function(){
            $("#formulario").submit(function(event){
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
    <form action="resultado2_7.php" method="get" name="formulario" id="formulario">
        <input type="text" name="numeroA" id="numeroA"> <br>
        <input type="text" name="numeroB" id="numeroB"> <br>
        <select name="operacion" id="operacion">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
            <option value="division">DIVISION</option>
        </select>
        <input type="submit" value="Enviar" name="Submit">
    </form>
</body>
</html>
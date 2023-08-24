<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <script>
        function validar(){
            var resp;
            var numeroA = document.getElementById("numeroA");
            var numeroB = document.getElementById("numeroB");
            var opcionSeleccionada = document.getElementById("operacion");
            if ((isNaN(numeroA.value)) || numeroA.value == ""){
                resp = false;
                numeroA.style.borderColor = "red";
            } else {
                resp = true;
                numeroA.style.borderColor = "green";
                if ((isNaN(numeroB.value)) || numeroB.value == ""){
                    resp = false;
                    numeroB.style.borderColor = "red";
                } else {
                    resp = true;
                    numeroB.style.borderColor = "green";
                    if (opcionSeleccionada.value == "division"){
                        if (numeroB.value == 0){
                            resp = false;
                            numeroB.style.borderColor = "red";
                        } else {
                            resp = true;
                            numeroB.style.borderColor = "green";
                        } 
                    }
                }
            }
            return resp;
        }
    </script>
    <form action="formAccion7.php" method="get" name="formulario" id="formulario" onsubmit="return validar();">
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
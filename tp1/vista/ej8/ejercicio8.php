<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <script type="text/javascript">
        function validar(){
            var resp;
            var edad = document.getElementById("edad");
            if (Number.isInteger(Number(edad.value)) && edad.value != "" && edad.value > 0){
                resp = true;
                edad.style.borderColor = "green";
            } else {
                resp = false
                edad.style.borderColor = "red";
            }
            return resp;
        }
    </script>
    <form action="formAccion8.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
        <label for="edad">Edad: </label>
        <input type="text" name="edad" id="edad"> <br>
        <h3>¿Eres estudiante?</h3>
        SI<input type="radio" name="esEstudiante" value="si"><br>
        NO<input type="radio" name="esEstudiante" checked value="no"><br>
        <input type="submit" value="Enviar" name="Submit">
        <input type="reset" value="Limpiar" name="Reset">
    </form>
</body>
</html>
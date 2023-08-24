<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2_8</title>
    <script type="text/javascript" src="../js/jquery-3.7.0.min.js"></script>
</head>
<body>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#formulario").submit(function(event){
                var edad = $("#edad").val();
                if (edad > 0 && edad != "" && Number.isInteger(Number(edad))){
                    $("#edad").css("borderColor", "green");
                } else {
                    event.preventDefault();
                    $("#edad").css("borderColor", "red");
                }
            })
        })
    </script>
    <form action="formAccion2_8.php" method="post" name="formulario" id="formulario">
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
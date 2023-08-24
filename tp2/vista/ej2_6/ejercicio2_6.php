<html>
    <head>
        <title>Ejercicio 2_6</title>
        <link rel="stylesheet" type="text/css" href="../css/ejercicio.css">
    </head>
    <body>
        <script type="text/javascript" src="../js/jquery-3.7.0.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate-1.19.5.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate-1.19.5-additional-methods.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.spanish.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#form").validate({
                    rules: {
                        nombre: {
                            pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                            required: true,
                        },
                        apellido: {
                            pattern: /^([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                            required: true,
                        },
                        edad: {
                            min: 1,
                            max: 120,
                            required: true,
                        },
                        direccion: {
                            pattern: /^([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*$/,
                            required: true,
                        },
                        estudio: {
                            required: true,
                        },
                        sexo: {
                            required: true,
                        },
                    },
                })
            });
        </script>
        <form id="form" name="form" method="get" action="formAccion2_6.php">
            <table>
                <tr>
                    <td class="textForm">Nombre: </td>
                    <td><input type="text" name="nombre" id="nombre" class="inputForm" placeholder="Ingrese su nombre"></td>
                </tr>
                <tr>
                    <td class="textForm">Apellido: </td>
                    <td><input type="text" name="apellido" id="apellido" class="inputForm" placeholder="Ingrese su apellido"></td>
                </tr>
                <tr>
                    <td class="textForm">Edad: </td>
                    <td><input type="number" name="edad" id="edad" class="inputForm" placeholder="Ingrese su edad"></td>
                </tr>
                <tr>
                    <td class="textForm">Dirección: </td>
                    <td><input type="text" name="direccion" id="direccion" class="inputForm" placeholder="Ingrese su dirección"></td>
                </tr>
                <tr>
                    <td class="textForm">Nivel de Estudio: </td>
                    <td>
                        <input type="radio" name="estudio" id="estudio" value="1">1 - No tiene estudios.<br>
                        <input type="radio" name="estudio" id="estudio" value="2">2 - Estudios primarios.<br>
                        <input type="radio" name="estudio" id="estudio" value="3">3 - Estudios secundarios.<br>
                    </td>
                </tr>
                <tr>
                    <td class="textForm">Sexo: </td>
                    <td>
                        <select name="sexo" id="sexo">
                            <option disabled selected value>Elija una opción</option>
                            <option value="hombre">Hombre</option>
                            <option value="mujer">Mujer</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="textForm">Deportes que practica: </td>
                    <td>
                        <input type="checkbox" name="deporte[]" id="deporte" value="futbol">Futbol <br>
                        <input type="checkbox" name="deporte[]" id="deporte" value="basket">Basket <br>
                        <input type="checkbox" name="deporte[]" id="deporte" value="tennis">Tennis <br>
                        <input type="checkbox" name="deporte[]" id="deporte" value="voley">Voley <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><br><div><input type="submit" name="submit" id="enviar" value="Enviar"></div></td>
                </tr>
            </table>
        </form>
    </body>
</html>
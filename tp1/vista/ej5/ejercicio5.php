<html>
    <head>
        <title>Ejercicio 5</title>
        <link rel="stylesheet" type="text/css" href="../css/ejercicio.css">
    </head>
    <body>
        <form id="form" name="form" method="get" action="formAccion5.php">
            <table>
                <tr>
                    <td class="textForm">Nombre: </td>
                    <td><input type="text" name="nombre" id="nombre" class="inputForm" placeholder="Ingrese su nombre" pattern="([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*" required></td>
                </tr>
                <tr>
                    <td class="textForm">Apellido: </td>
                    <td><input type="text" name="apellido" id="apellido" class="inputForm" placeholder="Ingrese su apellido" pattern="([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*" required></td>
                </tr>
                <tr>
                    <td class="textForm">Edad: </td>
                    <td><input type="number" name="edad" id="edad" class="inputForm" placeholder="Ingrese su edad" min="1" max="120" required></td>
                </tr>
                <tr>
                    <td class="textForm">Dirección: </td>
                    <td><input type="text" name="direccion" id="direccion" class="inputForm" placeholder="Ingrese su dirección" pattern="([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+)(\s+([0-9a-zñüáéíóúA-ZÑÜÁÉÍÓÚ']+))*" required></td>
                </tr>
                <tr>
                    <td class="textForm">Nivel de Estudio: </td>
                    <td>
                        <input type="radio" name="estudio" id="estudio" value="1" required>1 - No tiene estudios.<br>
                        <input type="radio" name="estudio" id="estudio" value="2">2 - Estudios primarios.<br>
                        <input type="radio" name="estudio" id="estudio" value="3">3 - Estudios secundarios.<br>
                    </td>
                </tr>
                <tr>
                    <td class="textForm">Sexo: </td>
                    <td>
                        <select name="sexo" id="sexo" required>
                            <option disabled selected value>Elija una opción</option>
                            <option value="hombre">Hombre</option>
                            <option value="mujer">Mujer</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><br><div><input type="submit" name="submit" id="enviar" value="Enviar"></div></td>
                </tr>
            </table>
        </form>
    </body>
</html>
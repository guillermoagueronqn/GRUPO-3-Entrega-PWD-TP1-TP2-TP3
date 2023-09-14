<?php
    $tituloPagina = "TP 3 - Ejercicio 3";
    include_once("../encabezado.php");
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <div class = "container_4">
            <form class = "form_4" action="formAccion3.php" method = "post" name = "cinema" id = "cine" enctype="multipart/form-data" onsubmit = "return validador();">
                <h3>Cinem@s</h3>
                <div class = "row_4">
                    <table>
                        <div class = "col md-12">
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for  = "titulo" class="form-label">Titulo: </label>
                                    <input type="text" class="form-control" id="titulo" placeholder = "Título" name = "titulo"  required>
                                </div>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <label for = "actores" class="form-label">Actores: </label>
                                    <input type="text" class="form-control" name = "actores" id="actores" placeholder = "Actores" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for = "director" class="form-label">Director: </label>
                                    <input type="text" class="form-control" name = "director" id="director" placeholder = "Director" required>
                                </div>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <label for = "guion" class="form-label">Guion: </label>
                                    <input type="text" class="form-control" name = "guion" id="guion" placeholder = "Guion" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for = "produccion" class="form-label">Producción: </label>
                                    <input type="text" class="form-control" name = "produccion" id="produccion" required>
                                </div>
                            </td>
                            <td>
                                <div class="mb-3">
                                    <label for = "year" class="form-label">Año</label>
                                    <input type="number" class="form-control" name = "year" id="year" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for = "nacionalidad" class="form-label">Nacionalidad</label>
                                    <input type="text" class="form-control" name = "nacionalidad" id="nacionalidad" required>
                                </div>
                            </td>
                            <td>
                                <div class = "mb-3">
                                    G&eacute;nero 
                                    <select name ="genero" id = "genero" class="form-select" aria-label="Default select example" required>
                                        <option selected disabled></option>
                                        <option value = "drama">Drama</option>
                                        <option value = "comedia">Comedia</option>
                                        <option value = "terror">Terror</option>
                                        <option value = "romance">Romance</option>
                                        <option value = "suspenso">Suspenso</option>
                                        <option value = "otras">Otras</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="mb-3">
                                    <label for = "duracion" class="form-label">Duración</label>
                                    <input type="number" class="form-control" name = "duracion" id="duracion" required>
                                </div>
                            </td>
                            <td>
                                <strong>Restricci&oacute;n de edad</strong><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="restriccion" id="restriccion_a" value = "a" required>
                                    <label class="form-check-label" for="restriccion_a">
                                        Todos los públicos
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="restriccion" id="restriccion_b" value = "b">
                                    <label class="form-check-label" for="restriccion_b">
                                        Mayores de 7 años
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="restriccion" id="restriccion_c" value = "c">
                                    <label class="form-check-label" for="restriccion_c">
                                        Mayores de 18 años
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <td>
                            <div class="mb-3">
                                <label for = "sinopsis" class="form-label">Sinopsis</label>
                                <textarea maxlength="100" class="form-control" name="sinopsis" id="sinopsis" required></textarea>
                            </div>
                        </td>
                    </table>
                </div>
                <!-- Enviar -->
                <div id = "botones">
                    <button type="submit" class="btn btn-primary" name = "enviar">Enviar</button>
                    <button type="reset" class="btn btn-primary" name = "reset" onclick = "borrar()">Borrar</button>
                    <input type="file" name = "mi_imagen" id = "mi_imagen">
                </div>
            </form>
        </div>
    </div>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
<?php
    $tituloPagina = "TP 2 - Ejercicio 3";
    include_once("../encabezado.php");
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <div class = "row">
            <div class = "col">
                <h3>Member Login</h3>
                <form action="formAccion3.php" id = "form_3" method = "get" name = "inicio" onsubmit = "return contraSegura();">
                    <div class="mb-3">
                        <input type="text" class="form-control" name = "username" id = "username" required aria-describedby="emailHelp" placeholder = "Username">
                        <div id="emailHelp" class="form-text">Tus datos están a salvo.</div>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name = "password" placeholder = "Password">
                    </div>
                    <button type="submit" value = "Ingresar" id = "btn_enviar" name = "iniciar" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="volver">
    <a href="../../../index/vista/index.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
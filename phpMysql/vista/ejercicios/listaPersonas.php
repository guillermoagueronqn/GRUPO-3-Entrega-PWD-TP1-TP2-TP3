<?php

    $tituloPagina = "TP 4 - Ejercicio 5 (listaPersonas.php)";
    include_once("../estructura/encabezado.php");

    include_once "../../configuracion.php";
    $objAbmPersona = new AbmPersona();

    $listaPersona = $objAbmPersona->buscar(null);

?>

    <div id="ejercicio">
        <div id="ejercicioFormulario2">
            <a href="autosPersona.php"><button class = "btn btn-primary">Filtrar autos por persona</button></a>
            <br><br>
            <?php	
            //xg
                if (count($listaPersona) > 0) {
                    echo "<h3>Personas (Lista)</h3>";
                    echo "<ul class= 'list-group' >";
                    echo "<li class= 'list-group-item active' aria-current= 'true' >Lista: </li>";
                        foreach ($listaPersona as $objPersona) { 
                            echo "<li class='list-group-item'>Dni: " . $objPersona->getNroDni() ."</li>";  
                            echo "<li class='list-group-item'>Apellido: " . $objPersona->getApellido() ."</li>"; 
                            echo "<li class='list-group-item'>Nombre: " . $objPersona->getNombre() . "</li>";
                            echo "<li class='list-group-item'>Fecha de nacimiento: " . $objPersona->getFechaNac() . "</li>";
                            echo "<li class='list-group-item'>Teléfono: " . $objPersona->getTelefono() . "</li>";
                            echo "<li class='list-group-item'>Domicilio: " . $objPersona->getDomicilio() . "</li>";
                            echo "<li class='list-group-item'> <a href='../accion/accionPersonaBorrar.php?accion=borrar&NroDni=" . $objPersona->getNroDni() ."'> Borrar </a></li>";
                        }
                        echo "</ul>";
                } else {
                    echo "<h3>No hay personas cargadas en la base de datos!</h3>";
                }
            ?>
        </div>
    </div>

    <div id="volver">
        <a href="../../../index/vista/index.php"><button class = "btn btn-primary">Volver al Índice</button></a>
    </div>

<?php
    include_once("../estructura/pie.php");
?>
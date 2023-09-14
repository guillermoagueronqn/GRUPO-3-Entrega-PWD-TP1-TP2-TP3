<?php
    $tituloPagina = "TP 4 - Ejercicio 3 (VerAutos.php)";
    include_once("../estructura/encabezado.php");
    include_once "../../configuracion.php";
    $objAbmAuto = new AbmAuto();
    $listaAuto = $objAbmAuto->buscar(null);
?>
<div id="ejercicio">
    <div id="ejercicioFormulario2">
        <br>
        <?php	
            if (count($listaAuto) > 0) {
                    echo "<h3>Autos (Lista)</h3>";
                    echo "<ul class= 'list-group' >";
                    echo "<li class= 'list-group-item active' aria-current= 'true' >Lista: </li>";
                foreach ($listaAuto as $objAuto) { 
                    echo "<li class='list-group-item'>Patente: " . $objAuto->getPatente() ."</li>";  
                    echo "<li class='list-group-item'>Marca: " . $objAuto->getMarca() ."</li>"; 
                    echo "<li class='list-group-item'>Modelo: " . $objAuto->getModelo() ."</li>"; 
                    echo "<li class='list-group-item'>Dni dueño: " . $objAuto->getObjDniDuenio()->getNroDni() ."</li>"; 
                    echo "<li class='list-group-item'>Dueño: "  . $objAuto->getObjDniDuenio()->getApellido() . " " . $objAuto->getObjDniDuenio()->getNombre() ."</li>"; 
                    echo '<li class="list-group-item"><a href ="../accion/accionAutoBorrar.php?accion=borrar&Patente=' . $objAuto->getPatente() . '">borrar</a></li>'; 
                    echo "</ul>";
                }
            } else {
                echo "<h3>No hay autos cargados en la base de datos!</h3>";
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
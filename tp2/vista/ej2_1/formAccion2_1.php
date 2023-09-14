<?php
    $tituloPagina = "TP 2 - Ejercicio 2_1 (Resultado)";
    include_once("../encabezado.php");

    include_once("../../control/Control2_1.php");
    $objControl2_1 = new Control2_1();
    $numero = $objControl2_1->tipoNumero($_GET['numero']);
?>

<div id="ejercicio">
    <div id="ejercicioFormulario">
        <?php
            if($numero == 1){
                echo "<h3 align='center'>El numero " . $_GET['numero'] . " es positivo</h3>";
            }elseif($numero == -1){
                echo "<h3 align='center'>El numero " . $_GET['numero'] . " es negativo</h3>";
            }else{
                echo "<h3 align='center'>El numero es cero</h3>";
            }
        ?>
    </div>
</div>

<div id="volver">
    <a href="ejercicio2_1.php">Volver</a>
</div>

<?php
    include_once("../pie.php");
?>
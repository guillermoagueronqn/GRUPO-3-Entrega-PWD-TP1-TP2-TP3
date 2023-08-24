<?php
    include_once("../../control/formAccion.php");
    $objControl2_1 = new Control2_1();
    $numero = $objControl2_1->tipoNumero($_GET['numero']);
?>

<html>
    <head>
        <title>Ejercicio 2_1 Resultado</title>
    </head>
    <body>
        <?php
            if($numero == 1){
                echo "<h3 align='center'>El numero " . $_GET['numero'] . " es positivo</h3>";
            }elseif($numero == -1){
                echo "<h3 align='center'>El numero " . $_GET['numero'] . " es negativo</h3>";
            }else{
                echo "<h3 align='center'>El numero es cero</h3>";
            }
        ?>
        <h3 align='center'><a href='ejercicio2_1.php'> Volver a ingresar un n&uacute;mero</a></h3>
        </body>
</html>

<?php
    include_once("../../control/Control1.php");
    $objControl1 = new Control1();
    $archivo = $objControl1->miArchivo($_FILES['archivo']);
    $dir = 'archivos/';
?>

<html>
    <head>
        <title>Ejercicio 1 Resultado</title>
    </head>
    <body>
        <?php
            if($archivo == "exito"){
                if(!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])){
                    echo "<h3 align='center'>ERROR: no se pudo cargar el archivo</h3>";
                }else{
                    echo "<h3 align='center'>El archivo " . $_FILES['archivo']["name"] . " se ha copiado con Éxito</h3>";
                }
            }else{
                echo "<h3 align='center'>" . $archivo . "</h3";
            }
        ?>
        <h3 align='center'><a href='../ej1/archivos/'> Ver archivo cargado</a></h3>
    </body>
</html>

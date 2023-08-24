<?php
    include_once("../../control/Control3.php");
    $objControl3 = new Control3();
    $mensaje = $objControl3->validarUsuario($_GET);
?>

<html> 
    <head>
        <title>Ejercicio 3 Resultado</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
    </head>
    <body>
        <?php
            echo $mensaje;
        ?>
    </body>
</html>
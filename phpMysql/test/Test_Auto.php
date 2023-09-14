<?php

    include_once '../configuracion.php';

    $obj = new Auto();
    $duenio = new Persona();
    $duenio->setear("11111111", "Herrera", "Federico", "1991-10-91", "299-5174466", "Tartagal 123");
    $obj->setear("ABC-123", "Ford Ka", 98, $duenio);

    if ($obj->insertar()) {
        echo "<br> El registro se inserto correctamente";
        verEstructura($obj);
    } else {
        echo "<br>" . $obj->getmensajeoperacion();
    } 

    $obj->setMarca("Fiat");

    if ($obj->modificar()) {
        echo "<br> El registro se actualizo correctamente";
        verEstructura($obj);
    } else {
        echo "<br>" . $obj->getmensajeoperacion();
    }

    $obj->setModelo(50);

    if ($obj->modificar()) {
        echo "<br> El registro se actualizo correctamente";
        verEstructura($obj);
    } else {
        echo "<br>" . $obj->getmensajeoperacion();
    }

    /*if ($obj->eliminar()) {
        echo "<br> El registro se elimino correctamente";
    } else {
        echo "<br>" . $obj->getmensajeoperacion();
    }*/

    if ($arreglo = $obj->listar()) {
        echo "<br> El registro se actualizo correctamente";
        print_r($arreglo);
    } else {
        echo "<br>" . $obj->getmensajeoperacion();
    }
?>
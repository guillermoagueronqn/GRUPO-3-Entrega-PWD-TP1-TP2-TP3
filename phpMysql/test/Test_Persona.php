<?php

    include_once '../configuracion.php';

    $obj = new Persona();
    $obj->setear("11111111", "Herrera", "Federico", "1991-10-31", "299-5174466", "Tartagal 123");

    if ($obj->insertar()) {
        echo "<br> El registro se inserto correctamente";
        verEstructura($obj);
    } else {
        echo "<br>" . $obj->getmensajeoperacion();
    } 

    $obj->setApellido("Centeno");

    if ($obj->modificar()) {
        echo "<br> El registro se actualizo correctamente";
        verEstructura($obj);
    } else {
        echo "<br>" . $obj->getmensajeoperacion();
    }

    $obj->setNombre("Gian");

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

?>
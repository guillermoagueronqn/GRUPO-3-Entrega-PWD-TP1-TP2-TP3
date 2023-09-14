<?php 

    include_once '../configuracion.php';

    $objBd = new BaseDatos();

    echo "<br>----------------------------------------------------------------------------------<br>";
    echo "<br>----------------------------------------------------------------------------------<br>";

    ///////////////////////////////
    ///    PROBANDO INSERTAR   ///
    /////////////////////////////

    $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
        VALUES ('33333333', 'Prueba', 'Prueba', '1111-11-11', '333-33333333', 'Tartagal 333');";
    $res = $objBd->Ejecutar($sql);

    if ($res) {
        echo "<br> El Registro se inserto.";
        if ($res > 0) {
            echo "<br> El id del campo autoincrement insertado es:" . $res;
            $id = $res;
        } else {
            echo " <br>La tabla no tiene un campo autoincrement.";
        }
    } else {
        echo "<br>No fue posible realizar la operacion.";
    }

    echo "<br>----------------------------------------------------------------------------------<br>";

    $sql = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio)
        VALUES ('PRUEBA-123', 'Prueba', 11, '33333333');";
    $res = $objBd->Ejecutar($sql);

    if ($res) {
        echo "<br> El Registro se inserto.";
        if ($res > 0) {
            echo "<br> El id del campo autoincrement insertado es:" . $res;
            $id = $res;
        } else {
            echo " <br>La tabla no tiene un campo autoincrement.";
        }
    } else {
        echo "<br>No fue posible realizar la operacion.";
    }

    echo "<br>----------------------------------------------------------------------------------<br>";

    ///////////////////////////////
    ///   PROBANDO ACTUALIZAR  ///
    /////////////////////////////

    $sql = "UPDATE persona SET Apellido = 'Prueba Modificado' WHERE NroDni = '33333333'";
    $res = $objBd->Ejecutar($sql);

    if ($res > -1) {    
        if ($res>0) {
            echo "<br> La cantidad de registros afectados por la operacion fueron :" . $res;
        } else {
            echo "<br> No han sido afectados registros en la actualización.";
        }
    } else {
        echo "<br>No fue posible realizar la operacion.";
    }

    echo "<br>----------------------------------------------------------------------------------<br>";

    ///////////////////////////////
    ///    PROBANDO ELIMINAR   ///
    /////////////////////////////

    $sql = "DELETE FROM auto  WHERE Patente = 'PRUEBA-123'";
    $res = $objBd->Ejecutar($sql);

    if ($res > -1) {
        if ($res > 0) {
            echo "<br> La cantidad de registros afectados por la operacion fueron :" . $res;
        } else {
            echo "<br> No han sido afectados registros en la actualización.";
        }
    } else {
        echo "<br>No fue posible realizar la operacion.";
    }

    $sql = "DELETE FROM persona  WHERE NroDni = '33333333'";
    $res = $objBd->Ejecutar($sql);

    if ($res > -1) {
        if ($res > 0) {
            echo "<br> La cantidad de registros afectados por la operacion fueron :" . $res;
        } else {
            echo "<br> No han sido afectados registros en la actualización.";
        }
    } else {
        echo "<br>No fue posible realizar la operacion.";
    }

    echo "<br>----------------------------------------------------------------------------------<br>";
    echo "<br>----------------------------------------------------------------------------------<br>";

    ///////////////////////////////
    ///     PROBANDO SELECT    ///
    /////////////////////////////

    $sql = "SELECT * FROM persona ";
    $res = $objBd->Ejecutar($sql);

    if ($res > -1) {
        if ($res > 0) {
            echo "<br> La cantidad de registros encontrados por la operacion fueron :" . $res;
            while ($reg = $objBd->Registro()) {
                echo "<pre>";
                print_r($reg);
                echo "</pre>";
            }
        } else {
            echo "<br> No han encontrado registros.";
        }
    } else {
        echo "<br>No fue posible realizar la operacion.";
    }

    echo "<br>----------------------------------------------------------------------------------<br>";
    echo "<br>----------------------------------------------------------------------------------<br>";

?>
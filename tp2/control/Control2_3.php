<?php

    class Control2_3 {
        public function infoForm() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $datos["nombre"] = $_POST['nombre'];
                $datos["apellido"] = $_POST['apellido'];
                $datos["edad"] = $_POST['edad'];
                $datos["direccion"] = $_POST['direccion'];
            } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
                $datos["nombre"] = $_GET['nombre'];
                $datos["apellido"] = $_GET['apellido'];
                $datos["edad"] = $_GET['edad'];
                $datos["direccion"] = $_GET['direccion'];
            }
            return $datos;
        }
    }

?>
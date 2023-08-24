<?php

    class Control2_5 {
        public function infoForm() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $datos["estudio"] = $_POST['estudio'];
                $datos["sexo"] = $_POST['sexo'];
            } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
                $datos["estudio"] = $_GET['estudio'];
                $datos["sexo"] = $_GET['sexo'];
            }
            return $datos;
        }
    }

?>
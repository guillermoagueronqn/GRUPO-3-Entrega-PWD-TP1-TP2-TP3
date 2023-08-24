<?php

    class Control1{
        public function tipoNumero($num){
            if($num > 0){
                $resultado = 1;
            }elseif($num < 0){
                $resultado = -1;
            }else{
                $resultado = 0;
            }
            return $resultado;
        }
    }

    class Control2{
        public function suma($horas){
            $suma = $horas['lunes'] + $horas['martes'] + $horas['miercoles'] + $horas['jueves'] + $horas['viernes'];
            return $suma;
        }
    }

    class Control3 {
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

    class Control4 {
        public function esMayor($edad) {
            if ($edad >= 18) {
                $resultado = true;
            } else {
                $resultado = false;
            }
            return $resultado;
        }
    }

    class Control5 {
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

    class Control6 {
        public function cantDeportes() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (count($_POST) == 8) {
                    $deportes = $_POST['deporte'];
                } else {
                    $deportes = [];
                }
            } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (count($_GET) == 8) {
                    $deportes = $_GET['deporte'];
                } else {
                    $deportes = [];
                }
            }
            $cantDeportes = count($deportes);
            return $cantDeportes;
        }
    }

    class Control7 {
        public function retornaInfo($formulario){
            $datos["operando1"] = $formulario["numeroA"];
            $datos["operando2"] = $formulario["numeroB"];
            $operacion = $formulario["operacion"];
            if ($operacion == "suma"){
                $datos["operacion"] = "+";
                $datos["resultado"] = $datos["operando1"]+$datos["operando2"];
            } elseif ($operacion == "resta"){
                $datos["operacion"] = "-";
                $datos["resultado"] = $datos["operando1"]-$datos["operando2"];
            } elseif ($operacion == "multiplicacion"){
                $datos["operacion"] = "*";
                $datos["resultado"] = $datos["operando1"]*$datos["operando2"];
            } else {
                $datos["operacion"] = "/";
                $datos["resultado"] = $datos["operando1"]/$datos["operando2"];
            }
            return $datos;
        }
    }

    class Control8 {
        public function retornaPrecioEntrada ($infoFormulario){
            $edad = $infoFormulario["edad"];
            $esEstudiante = $infoFormulario["esEstudiante"];
            if ($edad < 12 && $esEstudiante == "si"){
                $precioEntrada = 160;
            } elseif($edad >= 12 && $esEstudiante == "si"){
                $precioEntrada = 180;
            } else {
                $precioEntrada = 300;
            }
            return $precioEntrada;
        }
    }

?>
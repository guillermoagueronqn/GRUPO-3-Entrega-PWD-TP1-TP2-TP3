<?php

    class Control2_1{
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

    class Control2_2{
        public function suma($horas){
            $suma = $horas['lunes'] + $horas['martes'] + $horas['miercoles'] + $horas['jueves'] + $horas['viernes'];
            return $suma;
        }
    }

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

    class Control2_4 {
        public function esMayor($edad) {
            if ($edad >= 18) {
                $resultado = true;
            } else {
                $resultado = false;
            }
            return $resultado;
        }
    }

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

    class Control2_6 {
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

    class Control2_7 {
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

    class Control2_8 {
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

    class control3{
        public function validarUsuario($datos_form){
            $mensaje = "";
            $usuarios[0] = ["username" => "ezequiel95jr","password" => "holamundo123"];
            $usuarios[1] = ["username" => "juanlopez321", "password" => "arroz321"];
            $usuarios[2] = ["username" => "saxofon1", "password" => "123456789"];
            $usuarios[3] = ["username" => "admin", "password" => "admin123"];
    
            if($datos_form){
                $user = $datos_form["username"];
                $pass = $datos_form["password"];
                $no_encontrado = true; //no se encuentra de inicio
                $i = 0;
                while($i < count($usuarios) && $no_encontrado){
                    if($usuarios[$i]["username"] == $user){
                        //el usuario existe
                        if($usuarios[$i]["password"] == $pass){
                            //la contraseña coincide con el nombre de usuario
                            $mensaje = "Bienvenido ".$user."!\n";
                        }
                        else{
                            $mensaje = $user. " su contraseña es incorrecta \n";
                        }
                        $no_encontrado = false;
                    }
                    else{
                        $i +=1;
                    }
                }
                if($no_encontrado){
                    $mensaje = "El usuario (".$user.") no existe \n";
                }
            }
            return $mensaje;
        }
    }

    class control4{
        public function cinema($datos_form){
            $array = ["titulo" => $datos_form["titulo"],
                "director" => $datos_form["director"],
                "actores" => $datos_form["actores"],
                "guion" => $datos_form["guion"],
                "produccion" => $datos_form["produccion"],
                "year" => $datos_form["year"],
                "nacionalidad" => $datos_form["nacionalidad"],
                "genero" => $datos_form["genero"],
                "duracion" => $datos_form["duracion"],
                "restriccion" => $datos_form["restriccion"],
                "sinopsis" => $datos_form["sinopsis"],
        ];
        return $array;
        }
    }

?>
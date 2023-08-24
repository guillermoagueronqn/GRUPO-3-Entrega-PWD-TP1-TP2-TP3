<?php

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

?>
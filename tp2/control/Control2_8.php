<?php

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

?>
<?php

    class Control4{
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
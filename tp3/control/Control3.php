<?php

    class Control3{
        public function cinema($datos_form,$array_img){
            
            if($array_img["mi_imagen"]["error"] === 0){
                if(isset($array_img["mi_imagen"])){
                    $file_type = $array_img["mi_imagen"]["type"];
                    $temp_file = $array_img["mi_imagen"]["tmp_name"];
                }} else{
                    $temp_file = "error. No se ha subido ninguna foto";
                }

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
                "imagen" => $temp_file
        ];
        return $array;
        }
    }

?>
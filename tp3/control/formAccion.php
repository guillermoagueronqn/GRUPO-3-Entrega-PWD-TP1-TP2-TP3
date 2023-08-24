<?php

    class Control1{
        public function miArchivo($archivo){
            $resultado = "";
            $tamanio = $archivo['size'];
            $tipo = $archivo['type'];
            $error = $archivo['error'];
            if($error <= 0){
                if(($tipo == 'application/pdf' || $tipo == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')){
                    if($tamanio <= 2 * 1024 * 1024){
                        $resultado = "exito";
                    }else{
                        $resultado = "ERROR!! Tamaño superado";
                    }
                }else{
                    $resultado = "ERROR!! Tipo de archivo invalido";
                }
            }
            return $resultado;
        }
    }

    class control2 {
        public function retornaContenidoArchivo($archivo){
            $nombreTemporalArchivo = $archivo["tmp_name"];
            $tipoArchivo = $archivo["type"];
            if ($tipoArchivo == "text/plain"){
                $contenidoArchivo = file_get_contents($nombreTemporalArchivo);
            } else {
                $contenidoArchivo = "error";
            }
            return $contenidoArchivo;
        }
    }

    class control3{
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
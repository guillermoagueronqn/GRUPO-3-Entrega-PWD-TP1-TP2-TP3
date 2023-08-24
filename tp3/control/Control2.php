<?php

    class Control2 {
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

?>
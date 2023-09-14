<?php

    class Control6 {
        public function cantDeportes($datos) {
            if (count($datos) == 8) {
                $deportes = $datos['deporte'];
            } else {
                $deportes = [];
            }
            $cantDeportes = count($deportes);
            return $cantDeportes;
        }
    }

?>
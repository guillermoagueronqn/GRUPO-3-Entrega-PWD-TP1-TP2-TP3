<?php

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

?>
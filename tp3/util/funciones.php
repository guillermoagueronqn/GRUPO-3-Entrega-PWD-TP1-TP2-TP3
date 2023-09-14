<?php
    /**
     * Función de encapsulamiento de métodos $_POST y $_GET
     * @return array
     */
    function data_submitted() {
        $_AAux = array();
        if (!empty($_POST)) {
            $_AAux = $_POST;
        } else {
            if(!empty($_GET)) {
                $_AAux = $_GET;
            }
        }
        if (count($_AAux)) {
            foreach ($_AAux as $indice => $valor) {
                if ($valor == "") {
                    $_AAux[$indice] = null;
                }
            }
        }
        return $_AAux;
    }
?>

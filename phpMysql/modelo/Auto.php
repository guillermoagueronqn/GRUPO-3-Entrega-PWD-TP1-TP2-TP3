<?php

    class Auto {
        private $patente;
        private $marca;
        private $modelo;
        private $objDniDuenio;
        private $mensajeoperacion;

        public function __construct() {
            $this->patente = "";
            $this->marca = "";
            $this->modelo = null;
            $this->objDniDuenio = new Persona();
            $this->mensajeoperacion = "";
        }

        public function setear($patenteS, $marcaS, $modeloS, $objDniDuenioS) {
            $this->setPatente($patenteS);
            $this->setMarca($marcaS);
            $this->setModelo($modeloS);
            $this->setObjDniDuenio($objDniDuenioS);
        }

        public function getPatente() {
            return $this->patente;
        }

        public function setPatente($patenteNuevo) {
            $this->patente = $patenteNuevo;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function setMarca($marcaNuevo) {
            $this->marca = $marcaNuevo;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($modeloNuevo) {
            $this->modelo = $modeloNuevo;
        }

        public function getObjDniDuenio() {
            return $this->objDniDuenio;
        }

        public function setObjDniDuenio($objDniDuenioNuevo) {
            $this->objDniDuenio = $objDniDuenioNuevo;
        }

        public function getmensajeoperacion() {
            return $this->mensajeoperacion;
        }

        public function setmensajeoperacion($mensajeoperacionNuevo) {
            $this->mensajeoperacion = $mensajeoperacionNuevo;
        }

        public function cargar() {
            $resp = false;
            $base = new BaseDatos();
            $sql = "SELECT * FROM auto WHERE Patente = '" . $this->getPatente() . "'";
            if ($base->Iniciar()) {
                $res = $base->Ejecutar($sql);
                if ($res > -1) {
                    if ($res > 0) {
                        $row = $base->Registro();
                        $objDniDuenioS = new Persona();
                        $objDniDuenioS->setNroDni($row['DniDuenio']);
                        $objDniDuenioS->cargar();
                        $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $objDniDuenioS);
                        $resp = true;
                    }
                }
            } else {
                $this->setmensajeoperacion("Auto->listar: " . $base->getError());
            }
            return $resp;
        }

        public function insertar() {
            $resp = false;
            $base = new BaseDatos();
            $sql = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio)
                VALUES ('" . $this -> getPatente() .
                "','" . $this -> getMarca() . "'," . $this -> getModelo() .
                ",'" . $this -> getObjDniDuenio() -> getNroDni() . "')";
            if ($base->Iniciar()) {
                if ($base->Ejecutar($sql)) {
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
                }
            } else {
                $this->setmensajeoperacion("Auto->insertar: " . $base->getError());
            }
            return $resp;
        }

        public function modificar() {
            $resp = false;
            $base = new BaseDatos();
            $sql = "UPDATE auto
                SET Marca = '" . $this->getMarca() . 
                "', Modelo = " . $this -> getModelo() .
                ", DniDuenio = '" . $this -> getObjDniDuenio() -> getNroDni() .
                "' WHERE Patente = '" . $this->getPatente() . "'";
            if ($base->Iniciar()) {
                if ($base->Ejecutar($sql)) {
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
                }
            } else {
                $this->setmensajeoperacion("Auto->modificar: " . $base->getError());
            }
            return $resp;
        }

        public function eliminar() {
            $resp = false;
            $base = new BaseDatos();
            $sql = "DELETE FROM auto WHERE Patente = '" . $this->getPatente() . "'";
            if ($base->Iniciar()) {
                if ($base->Ejecutar($sql)) {
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
                }
            } else {
                $this->setmensajeoperacion("Auto->eliminar: " . $base->getError());
            }
            return $resp;
        }

        public static function listar($parametro = "") { 
            $arreglo = array();
            $base = new BaseDatos();
            $sql = "SELECT * FROM auto ";
            if ($parametro != "") {
                $sql .= 'WHERE ' . $parametro;
                //$sql .= 'WHERE ' . $parametro;
            }
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $base->Registro()) {
                        $obj = new Auto();
                        $objDniDuenioS = new Persona();
                        $objDniDuenioS->setNroDni($row["DniDuenio"]);
                        $objDniDuenioS->cargar();
                        $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $objDniDuenioS);
                        array_push($arreglo, $obj);
                    }
                }
            } else {
                $this->setmensajeoperacion("Auto->listar: " . $base->getError());
            }
            return $arreglo;
        }

    }

?>
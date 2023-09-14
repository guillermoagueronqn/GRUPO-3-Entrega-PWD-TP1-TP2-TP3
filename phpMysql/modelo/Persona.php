<?php

    class Persona {
        private $nroDni;
        private $apellido;
        private $nombre;
        private $fechaNac;
        private $telefono;
        private $domicilio;
        private $mensajeoperacion;

        public function __construct() {
            $this->nroDni = "";
            $this->apellido = "";
            $this->nombre = "";
            $this->fechaNac = "";
            $this->telefono = "";
            $this->domicilio = "";
            $this->mensajeoperacion = "";
        }

        public function setear($nroDniS, $apellidoS, $nombreS, $fechaNacS, $telefonoS, $domicilioS) {
            $this->setNroDni($nroDniS);
            $this->setApellido($apellidoS);
            $this->setNombre($nombreS);
            $this->setFechaNac($fechaNacS);
            $this->setTelefono($telefonoS);
            $this->setDomicilio($domicilioS);
        }

        public function getNroDni() {
            return $this->nroDni;
        }

        public function setNroDni($nroDniNuevo) {
            $this->nroDni = $nroDniNuevo;
        }

        public function getApellido() {
            return $this->apellido;
        }

        public function setApellido($apellidoNuevo) {
            $this->apellido = $apellidoNuevo;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombreNuevo) {
            $this->nombre = $nombreNuevo;
        }

        public function getFechaNac() {
            return $this->fechaNac;
        }

        public function setFechaNac($fechaNacNuevo) {
            $this->fechaNac = $fechaNacNuevo;
        }

        public function getTelefono() {
            return $this->telefono;
        }

        public function setTelefono($telefonoNuevo) {
            $this->telefono = $telefonoNuevo;
        }

        public function getDomicilio() {
            return $this->domicilio;
        }

        public function setDomicilio($domicilioNuevo) {
            $this->domicilio = $domicilioNuevo;
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
            $sql = "SELECT * FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";
            if ($base->Iniciar()) {
                $res = $base->Ejecutar($sql);
                if ($res > -1) {
                    if ($res > 0) {
                        $row = $base->Registro();
                        $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                        $resp = true;
                    }
                }
            } else {
                $this->setmensajeoperacion("Persona->listar: " . $base->getError());
            }
            return $resp;
        }

        public function insertar() {
            $resp = false;
            $base = new BaseDatos();
            $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
                VALUES ('" . $this -> getNroDni() .
                "','" . $this -> getApellido() . "','" . $this -> getNombre() .
                "','" . $this -> getFechaNac() . "','" . $this -> getTelefono() .
                "','" . $this -> getDomicilio() . "')";
            if ($base->Iniciar()) {
                if ($base->Ejecutar($sql)) {
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Persona->insertar: " . $base->getError());
                }
            } else {
                $this->setmensajeoperacion("Persona->insertar: " . $base->getError());
            }
            return $resp;
        }

        public function modificar() {
            $resp = false;
            $base = new BaseDatos();
            $sql = "UPDATE persona
                SET Apellido = '" . $this->getApellido() .
                "', Nombre = '" . $this->getNombre() .
                "', fechaNac = '" . $this->getFechaNac() .
                "', Telefono = '" . $this->getTelefono() .
                "', Domicilio = '" . $this->getDomicilio() .
                "' WHERE NroDni = '" . $this->getNroDni() . "'";
            if ($base->Iniciar()) {
                if ($base->Ejecutar($sql)) {
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
                }
            } else {
                $this->setmensajeoperacion("Persona->modificar: " . $base->getError());
            }
            return $resp;
        }

        public function eliminar() {
            $resp = false;
            $base = new BaseDatos();
            $sql = "DELETE FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";
            if ($base->Iniciar()) {
                if ($base->Ejecutar($sql)) {
                    $resp = true;
                } else {
                    $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
                }
            } else {
                $this->setmensajeoperacion("Persona->eliminar: " . $base->getError());
            }
            return $resp;
        }

        public static function listar($parametro = "") {
            $arreglo = array();
            $base = new BaseDatos();
            $sql = "SELECT * FROM persona ";
            if ($parametro != "") {
                $sql .= 'WHERE ' . $parametro;
            }
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    while ($row = $base->Registro()) {
                        $obj = new Persona();
                        $obj->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                        array_push($arreglo, $obj);
                    }
                }
            } else {
                $this->setmensajeoperacion("Persona->listar: " . $base->getError());
            }
            return $arreglo;
        }

    }

?>
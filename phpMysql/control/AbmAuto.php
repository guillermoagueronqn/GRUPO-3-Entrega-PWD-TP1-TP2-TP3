<?php

    class AbmAuto{
        // Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
         * @param array $param
         * @return Auto
         */
        private function cargarObjeto($param){
            $obj = null;

            if (array_key_exists('Patente',$param) and array_key_exists('Marca',$param) and array_key_exists('Modelo',$param) and array_key_exists('DniDuenio',$param)) {
                $obj = new Auto();
                $objDuenio = new Persona();
                $objDuenio->setNroDni($param['DniDuenio']);
                $objDuenio->cargar();
                $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $objDuenio);
            } elseif (array_key_exists('Patente',$param) and array_key_exists('DniDuenio',$param)) {
                $obj = new Auto();
                $obj->setPatente($param['Patente']);
                $obj->cargar();
                $objDuenio = new Persona();
                $objDuenio->setNroDni($param['DniDuenio']);
                $objDuenio->cargar();
                $obj->setObjDniDuenio($objDuenio);
            }
            return $obj;
        }

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
         * @param array $param
         * @return Auto
         */
        /*private*/public function cargarObjetoConClave($param){
            $obj = null;

            if ( isset($param['Patente']) ) {
                $obj = new Auto();
                $obj->setear($param['Patente'], null, null, null);
            }
            return $obj;
        }

        /**
         * Corrobora que dentro del arreglo asociativo están seteados los campos claves
         * @param array $param
         * @return boolean
         */
        private function seteadosCamposClaves($param){
            $resp = false;
            if (isset($param['Patente'])) {
                $resp = true;
            }
            return $resp;
        }

        /**
         * @param array $param
         */
        public function alta($param){
            $resp = false;
            //$param['Patente'] = null;
            $objAuto = $this->cargarObjeto($param);
            // verEstructura($objAuto);
            if ($objAuto != null and $objAuto->insertar()) {
                $resp = true;
            }
            return $resp;
        }

        /**
         * Permite eliminar un objeto 
         * @param array $param
         * @return boolean
         */
        public function baja($param){
            $resp = false;
            if ($this->seteadosCamposClaves($param)) {
                $objAuto = $this->cargarObjetoConClave($param);
                if ($objAuto != null and $objAuto->eliminar()) {
                    $resp = true;
                }
            }
            return $resp;
        }

        /**
         * Permite modificar un objeto
         * @param array $param
         * @return boolean
         */
        public function modificacion($param){
            //echo "Estoy en modificación";
            $resp = false;
            if ($this->seteadosCamposClaves($param)) {
                $objAuto = $this->cargarObjeto($param);
                if ($objAuto != null and $objAuto->modificar()) {
                    $resp = true;
                }
            }
            return $resp;
        }

        /**
         * Permite buscar un objeto
         * @param array $param
         * @return boolean
         */
        public function buscar($param){
            $where = " true ";
            if ($param <> null) {
                if (isset($param['Patente'])) {
                    $where .= " and Patente = '" . $param['Patente'] . "'";
                }
                if (isset($param['Marca'])) {
                    $where .= " and Marca = '" . $param['Marca'] . "'";
                }
                if (isset($param['Modelo'])) {
                    $where .= " and Modelo = '" . $param['Modelo'] . "'";
                }
                if (isset($param['DniDuenio'])) {
                    $where .= " and DniDuenio = '" . $param['DniDuenio'] . "'";
                }
            } 
            $arreglo = Auto::listar($where);  
            return $arreglo;
        }

    }

?>
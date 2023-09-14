<?php

    class AbmPersona{
        // Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
         * @param array $param
         * @return Persona
         */
        private function cargarObjeto($param){
            $obj = null;

            if (array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and array_key_exists('Nombre',$param) and array_key_exists('fechaNac',$param) and array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param)) {
                $obj = new Persona();
                $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
            }
            return $obj;
        }

        /**
         * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
         * @param array $param
         * @return Persona
         */
        private function cargarObjetoConClave($param){
            $obj = null;

            if ( isset($param['NroDni']) ) {
                $obj = new Persona();
                $obj->setear($param['NroDni'], null, null, null, null, null);
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
            if (isset($param['NroDni'])) {
                $resp = true;
            }
            return $resp;
        }

        /**
         * @param array $param
         */
        public function alta($param){
            $resp = false;
            // $param['NroDni'] = null;
            $objPersona = $this->cargarObjeto($param);
            // verEstructura($objPersona);
            if ($objPersona != null and $objPersona->insertar()) {
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
                $objPersona = $this->cargarObjetoConClave($param);
                if ($objPersona != null and $objPersona->eliminar()) {
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
                $objPersona = $this->cargarObjeto($param);
                if ($objPersona != null and $objPersona->modificar()) {
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
                if (isset($param['NroDni'])) {
                    $where .= " and NroDni =" . $param['NroDni'];
                }
                if (isset($param['Apellido'])) {
                    $where .= " and Apellido ='" . $param['Apellido'] . "'";
                }
                if (isset($param['Nombre'])) {
                    $where .= " and Nombre ='" . $param['Nombre'] . "'";
                }
                if (isset($param['fechaNac'])) {
                    $where .= " and fechaNac ='" . $param['fechaNac'] . "'";
                }
                if (isset($param['Telefono'])) {
                    $where .= " and Telefono ='" . $param['Telefono'] . "'";
                }
                if (isset($param['Direccion'])) {
                    $where .= " and Direccion ='" . $param['Direccion'] . "'";
                }
            }
            $arreglo = Persona::listar($where);  
            return $arreglo;
        }

    }

?>
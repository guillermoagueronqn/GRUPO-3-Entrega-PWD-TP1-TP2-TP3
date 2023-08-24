<?php

    class Control3{
        public function validarUsuario($datos_form){
            $mensaje = "";
            $usuarios[0] = ["username" => "ezequiel95jr","password" => "holamundo123"];
            $usuarios[1] = ["username" => "juanlopez321", "password" => "arroz321"];
            $usuarios[2] = ["username" => "saxofon1", "password" => "123456789"];
            $usuarios[3] = ["username" => "admin", "password" => "admin123"];

            if($datos_form){
                $user = $datos_form["username"];
                $pass = $datos_form["password"];
                $no_encontrado = true; //no se encuentra de inicio
                $i = 0;
                while($i < count($usuarios) && $no_encontrado){
                    if($usuarios[$i]["username"] == $user){
                        //el usuario existe
                        if($usuarios[$i]["password"] == $pass){
                            //la contraseña coincide con el nombre de usuario
                            $mensaje = "Bienvenido ".$user."!\n";
                        }
                        else{
                            $mensaje = $user. " su contraseña es incorrecta \n";
                        }
                        $no_encontrado = false;
                    }
                    else{
                        $i +=1;
                    }
                }
                if($no_encontrado){
                    $mensaje = "El usuario (".$user.") no existe \n";
                }
            }
            return $mensaje;
        }
    }

?>
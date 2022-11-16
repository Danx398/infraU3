<?php
        class Conexion{
            public function conectar(){
                $servidor = "localhost";
                $usuario = "";
                $password = "";
                $bd = "" ;

                $conexion = new mysqli($servidor,$usuario,$password, $bd);

                return $conexion;
            }
        }
    ?>
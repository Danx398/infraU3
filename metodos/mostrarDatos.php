<?php
    class mostrar{
        public function mostrarDatos($sql){
            $c=new Conexion();
            $conexion = $c->conectar();
            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
    }
?>
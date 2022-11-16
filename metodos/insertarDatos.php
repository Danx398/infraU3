<?php 

    require "../app/conexion.php";

    class InsertarDatos{
        public function insertar($datos){
            $c=new conexion();
            $conexion=$c->conectar();
            $sql="INSERT INTO personas (nombre,
                                            apellido,
                                            usuario)
                                VALUES ('$datos[0]',
                                        '$datos[1]',
                                        '$datos[2]')";

            return mysqli_query($conexion,$sql);
        }
    }

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['user'];

    $datos=array(
        $nombre,
        $apellidos,
        $usuario
    );

    $obj = new InsertarDatos();

    if($obj->insertar($datos)!=0){
        header("location: ../index.php");
    }else{
        echo "No se agregaron los datos";
    }
?>
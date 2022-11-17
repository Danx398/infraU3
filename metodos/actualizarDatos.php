<?php 

    require "../app/conexion.php";

    class ActualizarDatos{
        public function actualizar($datos){
            $c=new conexion();
            $conexion=$c->conectar();
            $sql="UPDATE personas
                SET nombre = '$datos[1]',
                    apellido = '$datos[2]',
                    usuario = '$datos[3]'
                WHERE id = '$datos[0]'";

            return mysqli_query($conexion,$sql);
        }
    }

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['user'];

    $datos = array(
        $id,
        $nombre,
        $apellidos,
        $usuario
    );

    $obj = new ActualizarDatos();

    echo $obj->actualizar($datos);

    if($obj->actualizar($datos)!=0){
        header("location: ../index.php");
    }else{
        echo "No se Actualizaron los datos";
    }
?>
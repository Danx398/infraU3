<?php 

    require "../app/conexion.php";
    
    class EliminarDatos{
        public function eliminarDatos($id){
            $c=new conexion();
            $conexion=$c->conectar();
            $sql="DELETE FROM personas WHERE id='$id'";
            return mysqli_query($conexion,$sql);
        }
    }

    $id = $_GET['id'];

    $obj = new EliminarDatos();

    if($obj->eliminarDatos($id)!=0){
        header("location: ../index.php");
    }else{
        echo "no se pudo eliminar";
    }

?>
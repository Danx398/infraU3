<?php
    require_once "app/conexion.php";
    require_once "metodos/mostrarDatos.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Infra</title>
</head>
<body>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col">
            <a href="./views/insertar.php" class="btn btn-dark">Insertar datos</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <table class="table text-center">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
        </tr>
        <?php
            $obj = new mostrar();
            $sql="SELECT id,nombre,apellido,usuario from personas";
            $datos=$obj->mostrarDatos($sql);
            foreach($datos as $key){
        ?>
        <tr>
            <td><?php echo $key['nombre'];?></td>
            <td><?php echo $key['apellido'];?></td>
            <td><?=$key['usuario'] ?></td>
            <td>
                <a href="./metodos/eliminarDatos.php?id=<?=$key['id']?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
            <td>
                <a href="./views/actualizar.php?id=<?=$key['id']?>" class="btn btn-outline-warning"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        <?php
            }   
        ?>
    </table>
        </div>
        
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
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
    <title>Infra</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
        <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
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
<?php

    require "../app/conexion.php";

    
    $c = new Conexion();
    $c = $c->conectar();

    $id = $_GET['id'];

    $sql = "SELECT id,nombre,apellido,usuario from personas WHERE id=$id;";

    $r = mysqli_fetch_array(mysqli_query($c, $sql));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h3 class="text-center"> Actualizar datos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="../metodos/actualizarDatos.php" method="post">
                    <div>
                        <input id="id"  name="id" value="<?php echo $r[0]?>" type="hidden" >
                    </div>
                    <label for="nombre">Nombre</label>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text"><i class="fa-regular fa-id-card"></i></span>
                        <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $r[1]?>">
                    </div>
                    <label for="apellido">Apellidos</label>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text"><i class="fa-regular fa-id-card"></i></span>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" value="<?php echo $r[2]?>">
                    </div>
                    <label for="usuario">Usuario</label>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="user" id="usuario" class="form-control" value="<?php echo $r[3]?>">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success">Actualizar Datos</button>
                        <a href="../index.php" class="btn btn-danger ms-3">Regresar</a>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
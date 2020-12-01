<?php
    session_start();
    if (!$_SESSION['user']) {
        header("Location: ../registro.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/stilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Administrar</title>
</head>
<header>
    <div class="contenedor-header d-flex justify-content-between shadow-lg">
        <div class="icono">
            <img src="../img/icono.jpg" alt="">
        </div>
        <div class="menu ">
            <ul class="d-flex justify-content-between">
                <li id="item"><a href="index.php" >Inicio</a></li>
                <li id="item"><a href="quienessomos.php" >Quienes Somos</a></li>
                <li id="item"><a href="" >Servicios</a>
                    <ul id="desple" class="shadow">
                        <li><a href="terapiapresencial.php">Terapia presencial</a></li>
                        <li><a href="terapiaonline.php">Terapia Online</a></li>
                    </ul>
                </li>
                <li id="item"><a href="recursos.php" >Recursos</a></li>
            </ul>
        </div>
        <div class="btn-registro">
            <button class="custom-btn btn-2 mb-1"><a href="registro.php">Administrar</a></button>
            <button class="custom-btn btn-2"><a href="../Desconectar.php">Cerrar Sesión</a></button>
        </div>
    </div>
</header>

<body>
   <div class="contenedor-principal-inicio">
        <div class="tituloinicio">
            <h1>Información Personal</h1>
        </div>
       <?php
        include("../conexion.php");

        $id = $_SESSION['id'];
        $query = "SELECT * FROM infusuarios WHERE id = $id";
        $result = mysqli_query($conexiondb, $query);
        
        while($row = mysqli_fetch_array($result)){
       ?>
        <div class="datosadministrador ">
            <img src="../img/usuario.png" alt="">
            <hr>
            <div class="datos">
                <label for="">Nombre:</label> <br>
                <input type="text" value="<?php echo $row['Nombres'] ?>" readonly>
            </div>
            <div class="datos">
                <label for="">Apellido:</label> <br>
                <input type="text" value="<?php echo $row['Apellidos'] ?>" readonly>
            </div>
            <div class="datos">
                <label for="">Teléfono:</label> <br>
                <input type="number" value="<?php echo $row['Telefono'] ?>" readonly>
            </div>
            <div class="datos">
                <label for="">Correo Electrónico:</label> <br>
                <input type="email" value="<?php echo $row['Correo'] ?>" readonly>
            </div>
            <div class="datos">
                <label for="">Contraseña:</label> <br>
                <input type="password" value="<?php echo $row['Contraseña'] ?>" readonly> 
            </div>
            <div class="datos">
                <label for="">Rol:</label> <br>
                <input type="text" value="<?php echo $row['Rol'] ?>" readonly> 
            </div>
        </div>
        <?php } ?>

        <hr>
        <div class="tituloinicio">
            <h1>Administrar Usuarios </h1>
        </div>
        <div class="divtable ">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <?php
                    include("../conexion.php");

                    $query = "SELECT * FROM infusuarios";
                    $result = mysqli_query($conexiondb, $query);

                    while($row = mysqli_fetch_array($result)){

                ?>
                <tbody>
                    <tr>
                        <th scope="row"> <?php echo $row['Nombres'] ?> </th>
                        <th scope="row"> <?php echo $row['Apellidos'] ?></th>
                        <th scope="row"> <?php echo $row['Telefono'] ?></th>
                        <th scope="row"><?php echo $row['Correo'] ?> </th>
                        <th scope="row"><?php echo $row['Contraseña'] ?> </th>
                        <th scope="row"><?php echo $row['Rol'] ?> </th>
                        <td>
                            <a href="editar.php?id=<?php echo $row['id'] ?>">Editar</a> <br>
                            <a href="../eliminar.php?id=<?php echo $row['id'] ?>">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
   </div>
        
</body>


</html>
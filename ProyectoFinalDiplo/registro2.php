
<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/stilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Registro</title>
</head>
<header>
    <div class="contenedor-header d-flex justify-content-between shadow-lg">
        <div class="icono">
            <img src="img/icono.jpg" alt="">
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
            <button class="custom-btn btn-2"><a href="registro.php">Iniciar Sesión</a></button>
        </div>
    </div>
</header>

<body>
    <div class="contenedor-principal-inicio">
        <form action="registrodb.php" method="POST">
            <div class="div-login">
                <h1><b>Registrarse</b></h1>
                <hr>
                <div class="datos">
                    <label for="">Nombre:</label> <br>
                    <input type="text" placeholder="Nombres" name="inputnombres">
                </div>
                <div class="datos">
                    <label for="">Apellido:</label> <br>
                    <input type="text" placeholder="Apellido" name="inputapellidos">
                </div>
                <div class="datos">
                    <label for="">Teléfono:</label> <br>
                    <input type="number" placeholder="Teléfono" name="inputtelefono">
                </div>
                <div class="datos">
                    <label for="">Correo Electrónico:</label> <br>
                    <input type="email" placeholder="Correo Electrónico" name="inputcorreo">
                </div>
                <div class="datos">
                    <label for="">Contraseña:</label> <br>
                    <input type="password" placeholder="Contraseña" name="inputcontraseña"> 
                </div>
                <div class="btns-login">
                    <input type="submit" class="custom-btn btn-3" value="Registrarse">
                </div>
            </div>
        </form>
    </div>
</body>


</html>
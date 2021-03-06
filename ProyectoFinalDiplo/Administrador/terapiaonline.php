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
    <title>Terapia Online</title>
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
        <div class="informacion-presencial">
            <div class="tituloinicio">
                <h1>Terapia Online</h1>
            </div>
            <div class="img-presencial">
                <img src="../img/terapiao.png" alt="">
            </div>
            <hr>
            <div class="parrafo-presencial">
                <p>La terapia psicológica online o presencial se basa fundamentalmente en la comunicación eficaz entre personas a través de la tecnología. En el procesos terapéutico, la persona describe que lo motivo a buscar orientación, su problema, y sus objetivos, el psicólogo por su parte analiza e interpreta el lenguaje verbal y no verbal del individuo.
                    Las tecnologías de la información y la comunicación TIC, en el momento han posibilitado una comunicación eficaz y permiten llevar a cabo un tratamiento psicológico efectivo. </p>
            </div>
        </div>
        <div class="metodos-pago">
            <h4><b>Reserva a aquí tu sesión</b></h4>
            <div class="calendario d-flex justify-content-start ">
                <p>Elige tu cita de acuerdo a la disponibilidad $60.000 por 120 minutos sesión en línea con terapeuta</p>
                <input type="date" name="" id="">
            </div>
            <h5><b>Métodos de Pago:</b></h5>
            <div class="img-pago d-flex justify-content-around">
                <img src="../img/visa.png" alt="">
                <img src="../img/master.png" alt="">
                <img src="../img/paypal.png" alt="">
                <img src="../img/amex.png" alt="">
            </div>
            <div class="btn-pagar">
                <button class="custom-btn btn-2"><a href="resgistro.html">Pagar</a></button>
            </div>
        </div>
        <hr>
    </div>

</body>

<footer>
    <div class="footer d-flex justify-content-between">
        <div class="redes-sociales">
            <h4>Redes Sociales</h4>
            <div class="img-redes">
                <a href=""><img src="../img/face.png" alt=""></a>
                <a href=""><img src="../img/insta.png" alt=""></a>
                <a href=""><img src="../img/twitter.png" alt=""></a>
            </div>
        </div>
        <div class="div-contacto">
            <h4>Contacto:</h4>
            <p><b>Direccion:</b> Calle 33#39-39 Ciudad verde - Soacha</p>
            <p><b>Correo:</b> javella2@iberamericana.edu.co</p>
            <p><b>Teléfono:</b> 3132882017</p>
        </div>
    </div>
</footer>
</html>
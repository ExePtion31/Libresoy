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
    <title>Inicio - Libre Soy</title>
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
            <h1>¿Sabías que la ansiedad tiene un mensaje para ti?</h1>
        </div>
        <div class="sliderinicio">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../img/Slider 1.png" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../img/Slider 2.png" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../img/Slider 3.png" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../img/Slider 4.png" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../img/Slider 5.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <hr>
        <div class="informacion-inicio d-flex justify-content-around">
            <div class="parrafo-inicio">
                <p>Empecemos por definir ¿Qué es la ansiedad? 
                    La ansiedad es una respuesta natural de nuestro cuerpo ante una alerta de peligro, todos en algún momento de nuestra vida hemos sentido ansiedad, pero, ocurre que cuando no sabemos gestionar algunas situaciones de nuestra vida como la preocupación, el estrés, la tristeza, situaciones del pasado que nos generan malestar,  esta ansiedad no desaparece y empeora con el tiempo, trayendo una serie de síntomas fisiológicos y psicológicos  y emocionales muy desagradables, que en relación generan  confusión, miedo y desorientación al no saber qué es lo que nos ocurre.  
                    El trastorno de ansiedad no es algo que aparezca de la noche a la mañana, generalmente por no decir siempre, aparece cuando se ha venido acumulando y reprimiendo muchas emociones, es por eso que la ansiedad te trae un mensaje “internamente necesitas sanar”</p>
                    
                    <p>La ansiedad te ha dado este mensaje de diferentes maneras, pero quizás tú,  por estar en la carrera de ganarle a la vida,  no prestaste atención,  así que ella recurrió a otras formas más contundentes y fuertes para ser escuchada.</p>
                    
            </div>
            <div class="imagen-inicio">
                <img src="../img/1.jpg" alt="">
            </div>
        </div>
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
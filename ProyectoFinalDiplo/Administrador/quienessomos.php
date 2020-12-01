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
    <title>Quienes Somos</title>
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
    <div class="contenedor-principal-inicio d-flex justify-content-between">
        <div class="informacion-quienesomos">
            <div class="tituloinicio">
                <h1>¿Quiénes Somos?</h1>
            </div>
            <div class="parrafo-quienessomos">
                <p>Hola… Soy Jenny Fernanda Avellaneda Suarez,  colombiana, estudie Psicología en la universidad Iberoamericana, con el interés por la psicología clínica.
                    Desde que era una adolescente en mí se despertó un deseo profundo por la ciencia que estudia los procesos mentales, el comportamiento del ser humano, lo que definitivamente me llevo a estudiar esta hermosa carrera de la cual cada día me enamoro más. Adicional, amo a mi familia, la música, los gatos, los perros, la comida y los viajes.</p>
                <p>He creado esta página web  debido  a que con la emergencia de salud pública en muchos lugares se habla se ansiedad pero muy pocas personas logran tener acceso a una solución eficaz  debido a la falta de preparación y  empatía de muchos profesionales de la salud. Es por eso que nace este querer para que muchas personas que hoy atraviesan este camino apedreado  vean a la ansiedad como algo que les ha salvado la vida y que les quiere enseñar a vivir.</p>
            </div>
        </div>
        <div class="imagen-quienesomos">
            <img src="../img/Quienes somos.jpg" alt="">
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
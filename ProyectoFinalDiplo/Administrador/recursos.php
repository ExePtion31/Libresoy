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
    <title>Recursos</title>
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
       <div class="informacion-recursos">
            <div class="tituloinicio">
                <h1>Recursos</h1>
            </div>
            <div class="parrafo-recursos">
                <p>A continuación podrás encontrar algunos recursos que te ayudaran a comprender como el poner en práctica algunas actividades y modificar hábitos se relacionan a tu bienestar físico y mental </p>
            </div>
            <div class="titulo-alimentacion">
                <h2>Alimentación</h2>
            </div>
            <div class="parrafo-alimentacion">
                <p>5 alimentos para combatir el estrés y la ansiedad. <br>
                    “eres lo que comes” esta frase hace referencia a que todos lo que consumimos tiene un efecto en nuestro organismo, especialmente en nuestro sistema nervioso, por lo tanto a continuación compartimos algunos alimentos que aportan nutrientes suficientes para el funcionamiento de tu cuerpo y de  tu mente, lo cual  te ayudaran a combatir la ansiedad y el estrés. </p>
            </div>
       </div>
       <div class="informacion-tarjetas d-flex justify-content-around">
           <div class="tarjetas shadow">
               <div class="titulo-tarjeta">
                    <h3>Omega 3</h3>
               </div>
               <hr>
               <div class="img-tarjeta">
                    <img src="../img/2.jpg" alt="">
               </div>
               <div class="parrafo-tarjeta">
                    <p><b>El salmon:</b> por su aporte en Omega 3 y su alto contenido de magnesio, combate la inflamación, regula el azúcar en la sangre y previene las homonas del estrés, por lo tanto mantiene los niveles de ansiedad.</p>
               </div>
           </div>
           <div class="tarjetas shadow">
                <div class="titulo-tarjeta">
                    <h3>Atioxidantes </h3>
                </div>
                <hr>
                <div class="img-tarjeta">
                    <img src="../img/3.jpg" alt="">
                </div>
                <div class="parrafo-tarjeta">
                    <p><b> Aguacate:</b> funciona como antioxidante y ayuda a bajar la presión arterial por lo cual es fundamental en tu dieta para cuidar la salud de tu cerebro.
                    <p> <b>Espinaca: </b> Su alto contenido en magnesio ayuda a combatir los niveles de ansiedad</p>
                </div>
            </div>
            <div class="tarjetas shadow">
                <div class="titulo-tarjeta">
                     <h3> Cereales y frutos secos </h3>
                </div>
                <hr>
                <div class="img-tarjeta">
                     <img src="../img/4.jpg" alt="">
                </div>
                <div class="parrafo-tarjeta">
                     <p><b>Avena:</b> Este alimento es rico en magnesio, vitamina B, por lo cual es recomendada para reducir los síntomas de ansiedad.<p>
                    <p><b>Almendras:</b> Son eficientes para equilibrar los niveles de cortisol en tu cerebro, este alimento es rico en magnesio, vitamina B12, y vitamina E.<p>
                </div>        
            </div>
            <div class="tarjetas shadow">
                <div class="titulo-tarjeta">
                    <h3>Chocolate 100% cacao</h3>
                </div>
                <hr>
                <div class="img-tarjeta">
                    <img src="../img/8.jpg" alt="">
                </div>
                <div class="parrafo-tarjeta">
                    <p><b>Chocolate:</b> este alimento reduce las hormonas del estrés, lo que permite controlar la ansiedad.</p>
                </div>
            </div>
       </div>
       <hr>
       <div class="informacion-recursos">
            <div class="titulo-alimentacion">
                <h2>Que no debes consumir para combatir la ansiedad.</h2>
            </div>
            <div class="parrafo-alimentacion">
                <p>Una de la parte de la ansiedad que se experimenta es debido a el consumo de distintos estimulantes y a deficiencias  en vitaminas y minerales, por lo tanto es conveniente que limites el consumo de ciertos alimentos como:
                    grasas saturadas de embutidos como las hamburguesas, los perros calientes, lácteos enriquecidos en nata, repostería, pastelería, etc. 
                    Estimulantes como: café, refrescos, gaseosas o bebidas energizantes, nicotina, alcohol.
                    Productos artificiales como los que son utilizados en el procesamiento de comida industrial, son productos que nuestro cuerpo procesa con mayor dificultad como por ejemplo, los alimentos con sabores artificiales (glutamo de monosodio, azucares artificiales pues causan un efecto irritante en el sistema nervioso. Lo mejor es consumir alimentos preparados en casa. </p>
            </div>
        </div>
       <div class=" Recursos-img d-flex justify-content-around">
            <img src="../img/no-alcohol.png" alt="">
            <img src="../img/no-comer (1).png" alt="">
            <img src="../img/no-comer.png" alt="">
            <img src="../img/no-fumar-cigarrillos.png" alt="">
        </div>
        <hr>
        <div class="informacion-recursos">
            <div class="titulo-alimentacion">
                <h2>Mindfulness.</h2>
            </div>
            <div class="parrafo-alimentacion">
                <p>Definición de mindfulness Desde hace ya dos mil quinientos años o más, miles de personas vienen practicando diversas técnicas meditativas, transmitidas por religiones y tradiciones espirituales (1). La meditación se define como el proceso a través del cual, la persona observa y se hace consciente de lo que está sucediendo a cada instante en su cuerpo y en su mente, aceptando las experiencias que se van presentando tal y como éstas son. Esta práctica, enseñada por Buda, tiene como fin la eliminación del sufrimiento y demás emociones destructivas, ya que desde el punto de vista budista, tanto la felicidad como el sufrimiento no dependen fundamentalmente de las circunstancias externas, sino de la propia mente.(Neuropsiquiatr, 2016).</p>
            </div>
            <div class="mindfulness-Recursos">
                <img src="../img/mind.jpg" alt="">
            </div>
        </div>
        <hr>
        <div class="informacion-recursos">
            <div class="titulo-alimentacion">
                <h2>Reducción del Estrés Basado en Mindfulness (MBSR):</h2>
            </div>
           <div class="d-flex justify-content-around">
                <div class="parrafo-alimentacion Infomindfulness">
                    <p>Ds el enfoque pionero en la integración de técnicas de meditación en la medicina y psicología occidental, fue desarrollado por Jon Kabat-Zinn en 1982 (7,17). Para poder afrontar el sufrimiento y el estrés el MBSR propone adoptar unas actitudes concretas durante la práctica de los ejercicios integrados en el programa, todas ellas devienen del zen y son las siguientes: no juzgar, tener paciencia, mente de principiante, tener confianza en la propia bondad y sabiduría básica, no esforzarse por conseguir ningún propósito, aceptar y dejar pasar (18). Los componentes del programa son cinco: la meditación estática, la atención en la vida cotidiana, la meditación caminando, la revisión atenta del cuerpo y el Hatha Yoga (18). La duración del programa es de ocho semanas, los participantes realizan autoregistros y practican los ejercicios individualmente en sus casas con ayuda audiovisual. Se realiza además una reunión semanal de dos horas y media para practica grupal (18). Este programa se imparte en numerosos hospitales y clínicas de Estados Unidos y se considera un complemento para el tratamiento de patologías susceptibles de provocar estrés como psoriasis, cáncer, fibromialgia, recuperación postinfarto, etc.</p>
                </div>
                <div class=" Infomindfulness">
                    <video src="../img/mindfulness.mp4" controls width="600" height="500"></video>
                </div>
           </div>
           <hr>
        </div>
        <div class="informacion-recursos">
            <div class="titulo-alimentacion">
                <h2>Deporte.</h2>
            </div>
            <div class="parrafo-alimentacion">
                <p>En el contexto de salud mental, existe una variedad de circunstancias terapéuticas que están asociadas a la práctica deportiva, donde se considera a la actividad física como un aliado en los procesos de intervención en patologías tan frecuentes como el estrés, la ansiedad y la depresión. También, la actividad física y el deporte puede establecerse como un elemento protector en la aparición de trastornos de personalidad, estrés laboral o académico, ansiedad social, falta de habilidades sociales etc.</p>
            </div>
            <div class="mindfulness-Recursos">
                <img src="../img/10.jpg" alt="">
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
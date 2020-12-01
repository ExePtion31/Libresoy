<?php

    session_start();
    require("conexion.php");

    $correo = $_POST['mail'];
    $contraseña = $_POST['password'];

    $sql1 = mysqli_query($conexiondb,"SELECT * FROM infusuarios WHERE Correo = '$correo'");
	if($f1 = mysqli_fetch_array($sql1)){
		if($contraseña == $f1 ['Contraseña']){
            $rango = $f1 ['Rol'];
			if($rango == "Usuario" || $rango == "usuario"){
                $_SESSION['id']     =$f1['id'];
                $_SESSION['user']   =$f1['Nombres'];
                echo "<script>alert('Bienvenido Usuario')</script> ";
                echo "<script>location.href='usuario/index.php'</script>";
            }
        }else{
            echo "<script>alert('Contraseña Incorrecta')</script> ";
            echo "<script>location.href='registro.php'</script>";
        }
    }

    $sql2 = mysqli_query($conexiondb,"SELECT * FROM infusuarios WHERE Correo = '$correo'");
    if($f2 = mysqli_fetch_array($sql2)){
    if($contraseña == $f2 ['Contraseña']){
        $rango = $f2 ['Rol'];
        if($rango == "Administrador" || $rango == "administrador"){
            $_SESSION['id']     =$f2['id'];
            $_SESSION['user']   =$f2['Nombres'];
            echo "<script>alert('Bienvenido Administrador')</script> ";
            echo "<script>location.href='Administrador/index.php'</script>";
        }
    }else{
            echo "<script>alert('Contraseña Incorrecta')</script> ";
            echo "<script>location.href='registro.php'</script>";
        }
    }   
    echo "<script>alert('Este Usuario no se encuentra registrado')</script>";
    echo "<script>location.href='registro.php'</script>";
?>    
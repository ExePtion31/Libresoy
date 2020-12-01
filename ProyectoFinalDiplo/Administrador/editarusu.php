<?php
    include("../conexion.php");
    extract($_POST);


    $query = "UPDATE infusuarios SET 
        Nombres = '".$_POST['inputnombre']."',
        Apellidos = '".$_POST['inputapellido']."',
        Telefono = '".$_POST['inputtelefono']."',
        Correo = '".$_POST['inputcorreo']."',
        Contraseña = '".$_POST['inputcontraseña']."',
        Rol = '".$_POST['inputrol']."'
        WHERE id = '".$_POST['inputid']."'";
    
    $result = mysqli_query($conexiondb, $query);

    if ($result==null) {
		echo "<script>alert('No se pueden actualizar los datos del usuario')</script> ";
		header("location: editar.php");
	}else {
		echo "<script>alert('Datos del usuario actualizados exitosamente!')</script> ";
		echo "<script>location.href='registro.php'</script>";
	}
?>
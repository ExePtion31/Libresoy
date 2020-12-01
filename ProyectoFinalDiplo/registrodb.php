<?php
include("conexion.php");
    if (isset($_POST['inputapellidos'])){
      $recibenombres = $_POST['inputnombres'];
      $recibeapellidos = $_POST['inputapellidos'];
      $recibetelefono = $_POST['inputtelefono'];
      $recibecorreo = $_POST['inputcorreo'];
      $recibecontraseña = $_POST['inputcontraseña'];
      

    
      $query = "INSERT INTO infusuarios(Nombres, Apellidos, Telefono, Correo, Contraseña, Rol) VALUES ('$recibenombres', '$recibeapellidos', $recibetelefono, '$recibecorreo', '$recibecontraseña', 'Usuario')";
      $result = mysqli_query($conexiondb, $query);
      if(!$result) {
        echo '<script>alert("ERROR \nNo se puede registrar")</script> ';
        echo "<script>location.href='registro2.php'</script>";
      
      } else{
        echo '<script>alert("Exito! \nSe pudo registrar exitosamente ")</script> ';
        echo "<script>location.href='registro.php'</script>";
      }
    
    }
?>
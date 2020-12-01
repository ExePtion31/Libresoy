<?php
    include("conexion.php");
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query ="DELETE FROM infusuarios WHERE id = $id";
        $result = mysqli_query($conexiondb,$query);

        if (!$result) {
            echo '<script>alert("ERROR \nNo se pudo eliminar al usuario.")</script> ';
            echo "<script>location.href='Administrador/index.php'</script>";
        }else{
            echo '<script>alert("Exito! \nSe pudo eliminar al usuario.")</script> ';
            echo "<script>location.href='Administrador/index.php'</script>";
        }

        
    }

 ?>
<?php
session_start();
if ($_SESSION['user']) {
    session_destroy();
    header("location:registro.php");
}
else{
    header("location:registro.php");
}
?>
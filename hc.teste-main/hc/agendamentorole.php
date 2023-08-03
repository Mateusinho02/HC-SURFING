<?php 
session_start();
if (isset($_SESSION['idUsuario'])) {
    echo '<h1>Olá</h1>';
} else {
    header('Location: login.php');
}


?>
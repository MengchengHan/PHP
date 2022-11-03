<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!isset($_COOKIE['usuario'])){
            $nombre=$_POST['nombre'];
            setcookie('usuario', $nombre, time() + 3600, 'welcome.php', '', 0);
            header('Location: welcome.php');
        } 
    }
    
?>
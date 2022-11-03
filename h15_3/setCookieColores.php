<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!isset($_COOKIE['eleccion'])){
            $elegido=$_POST['colour'];
            setcookie('eleccion', $elegido, time() + 3600, '', '', 0);
            header('Location: mostrarColor.php');
        } 
    }
?>
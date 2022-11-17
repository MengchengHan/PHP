<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $palabras = $_SESSION['palabras'];
        $palabra = $_POST['introducido'];
        $_SESSION['intento'] = $_SESSION['intento'] + 1;
        if(in_array($palabra, $palabras)){
            $_SESSION['puntos'] = $_SESSION['puntos'] + 1;
        } 
        header('Location:juego.php');
    }  
?>
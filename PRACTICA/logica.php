<?php
include 'session.php';
function letras($palabras){
    $array = [];
    foreach ($palabras as $k => $v) {
        $array_letras = preg_split('//', $v, -1, PREG_SPLIT_NO_EMPTY);
        $array = array_merge($array_letras, $array);
    }
    shuffle($array);
    return array_unique($array);
}    

    if(!$_SESSION['logged_in']){
        header('Location:login.php');
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $palabras = $_SESSION['palabras'];
            $palabra = $_POST['introducido'];
            $_SESSION['intento']++;
            if(in_array($palabra, $palabras)){
                $_SESSION['puntos']++;
                $key = array_search($palabra, $palabras);
                unset($_SESSION['palabras'][$key]);
                $_SESSION['letras'] = letras($_SESSION['palabras']);
            } 
            header('Location:juego.php');
        }  
    }

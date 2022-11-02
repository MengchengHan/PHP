<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!isset($_COOKIE['eleccion'])){
            $elegido=$_POST['noticias'];
            setcookie('eleccion', $elegido, time() + 3600, '', '', 0);
            if($elegido == 'economia'){
                header('Location: economia.php');
            } else if ($elegido == 'politica'){
                header('Location: politica.php');
            } else if ($elegido == 'deporte') {
                header('Location: deporte.php');
            } else {
                header('Location: periodico.php');
            }
        } 
        
    }
    
?>
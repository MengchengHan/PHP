<?php
    $nombre = 'galleta';
    $valor = 404;
    $fecha_expiracion = time() + 600;
    $path = dirname($_SERVER['REQUEST_URI']);

    setcookie($nombre, $valor, $fecha_expiracion, $path, '', 0);
    print_r($_COOKIE);
    echo $nombre, $valor, $fecha_expiracion, $path . "<br>";
    //setcookie('galleta', '', time()-1);
    
    if(!empty($_COOKIE)){
        foreach ($_COOKIE as $key => $value) {
            echo $nombre . " " . $valor;
        }
    }

    setcookie('galleta2', 405, time() + 600, dirname($_SERVER['REQUEST_URI']), '', 0);

    header("refresh: 1");

    exit;
?>      
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = 'galleta';
        if (!isset($_COOKIE[$nombre])) {
            $veces = 1;
        } else {
            $veces = $_COOKIE[$nombre] + 1;
        }

        setcookie($nombre, $veces, time() + 3600, $_SERVER['REQUEST_URI'], '', 0);
    }
?>
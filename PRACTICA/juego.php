<?php
    session_start();
    if(!isset($_SESSION['letras'])){

        $mysqli = new mysqli("localhost", "root", "", "juego");
        $resultado = mysqli_query($mysqli, "SELECT palabra FROM palabras ORDER BY RAND() LIMIT 100");
        $palabras = array_map('current', mysqli_fetch_all($resultado));
        //echo "<pre>" . print_r($palabras, true) . "</pre>";
        
        $letras = [];
        foreach($palabras as $k => $v){
            $array_letras = preg_split('//', $v, -1, PREG_SPLIT_NO_EMPTY);
            $letras = array_merge($array_letras, $letras);
        }
        
        shuffle($letras);
        $letras = array_unique($letras);
        $_SESSION['palabras'] = $palabras;
        $_SESSION['letras'] = $letras;
        //echo "<pre>" . print_r($letras, true) . "</pre>";
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logica.php" method="post">
        <?php
            foreach($_SESSION['letras'] as $k => $v) {
                echo $v . " ";
            } 
            //echo "<br>" . "Puntos: " . isset($_SESSION['puntos']) ? $_SESSION['puntos'] : null . "<br>";
            if(isset($_SESSION['puntos'])){
                echo "<br>" . "Aciertos: " . $_SESSION['puntos'] . "<br>";
                echo "Intento nº: " . $_SESSION['intento'];
            }
        ?>
        <br>
        <input type="text" name="introducido">
        <input type="submit">
        <?php
            echo "<pre>" . print_r($_SESSION['palabras'], true) . "</pre>";
        ?>
    </form>
</body>
</html>
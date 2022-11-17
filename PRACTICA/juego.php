<?php
    $mysqli = new mysqli("localhost", "root", "", "juego");
    $resultado = mysqli_query($mysqli, "SELECT palabra FROM palabras ORDER BY RAND() LIMIT 100");
    $palabras = array_map('current', mysqli_fetch_all($resultado));
    echo "<pre>" . print_r($palabras, true) . "</pre>";

    $letras = [];
    foreach($palabras as $k => $v){
        $array_letras = preg_split('//', $v, -1, PREG_SPLIT_NO_EMPTY);
        $letras = array_merge($array_letras, $letras);
    }
    
    $letras = array_unique($letras);
    echo "<pre>" . print_r($letras, true) . "</pre>";

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
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <?php
            echo "<input type=button value=" . shuffle($letras) . ">";
            foreach($letras as $k => $v) {
                echo "<input type=button value=$v>";
            }
        ?>
    </form>
</body>
</html>
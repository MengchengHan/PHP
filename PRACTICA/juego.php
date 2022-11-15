<?php
    $mysqli = new mysqli("localhost", "root", "", "juego");
    $resultado = $mysqli->query("SELECT palabra FROM palabras ORDER BY RAND() LIMIT 10");
    $array = array();
    foreach($resultado->fetch_all() as $k => $v) {
        $array = $v;
    }
        
    print_r($array);
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
    
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 2</title>
</head>
<body>
    <?php 
        $array = array(
            'k0' => 'Juan',
            'k1' => 'Álvaro',
            'k2' => 'Maite',
            'k3' => 'Álvaro',
            'k4' => 'Juan',
            'k5' => 'Martina'
        );
        
        while ($ahora = current($array)){
            if($ahora == "Álvaro") {
                echo key($array) . "<br>";
            }
            next($array);
        }

        reset($array);
        echo current($array);
    ?>
</body>
</html>
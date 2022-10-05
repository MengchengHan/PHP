<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 4</title>
</head>
<body>
    <?php
    $repetidos = array();
        $array1 = array (100, 99, 50, 343, "100", 13, 22, 4, 6, 50, 99, 100, 343, "99");
        for($i = 0; $i < count($array1); $i++){
            for($j = $i+1; $j < count($array1) - 1, $j++){
                if (in_array($array1[$i], $array1[$j])) {
                    $repetidos =(
                        []
                    );
                }
            }
        }
    ?>
</body>
</html>
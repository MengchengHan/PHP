<html>
<head>
 <title>PHP: Formatos de fechas</title>
</head>
<body>
<?php
    echo date('l, jS', time()) . " of " . date ('F', time()) . " of " . date('Y h:i:s', time()) . "<br>";
    echo date('l, jS', strtotime('+1 week')) . " of " . date ('F', strtotime('+1 next week')) . " of " . date('Y h:i:s', strtotime('+1 week')) . "<br>";

    echo date('Y-M-d', time()) . "<br>";
    echo date('Y-M-d', strtotime('+1 week')) . ". A las " . date('h:i:s', time()) . "<br>";  
    //fechas en inglés, no está definido la traducción al español

    function checkLeap($ano){
        if($ano%4 == 0 && ($ano%100 != 0 || $ano%400 == 0)){
            echo "Es bisiesto";
        } else {
            echo "No es bisiesto";
        }
        return;
    }

    echo checkLeap(2100) . "<br>";

    echo "Today is " . date('l', time());

?> 
</body>
</html>
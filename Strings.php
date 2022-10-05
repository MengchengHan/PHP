<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
        function calculadora ($operacion, $num1, $num2=null){
            $resul = $operacion($num1, $num2);
            return $resul;
        }

        function factorial($numero){
            $resultado = $numero;
            while($numero > 1){
                $resultado = $resultado * ($numero - 1);
                $numero--;
            }
            return $resultado;
        }

        function sumar($a, $b){
            return $a + $b;
        }

        function multiplicar($a, $b){
        return $a * $b;
        }

        $a = 10;
        $b = 5;

        $r1 = calculadora ( "multiplicar", $a, $b);
        echo $r1 . "<br>";

        $r2 = calculadora ( "sumar", $a, $b);
        echo $r2 . "<br>";

        $r3 = calculadora ( "factorial", 5);
        echo $r3 . "<br>";
    ?>
</body>
</html>
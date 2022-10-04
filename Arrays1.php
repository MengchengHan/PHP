<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 1</title>
</head>
<body>
    <?php 
        $alumno=array(
            "nombre" => "José",
            "apellidos" => "Martínez Roca",
            "telefono" => "96 361 66 54",
            "direccion" => "C/ Arco del triunfo 13",
            "dni" => "22 111 055",
            "num_matricula" => "6666",
            "facultad" => "Facultad Informática",
            "curso" => "5" 
            ); 
            
        $claves = array_keys($alumno);
        
        echo "Claves" . "<br>";
        print_r($claves);

        $valores = array_values($alumno);
        echo "Valores". "<br>";
        print_r($valores);

        

        $colores = array(
            "Colores fuertes" => array("red", "green", "blue"),
            "Colores suaves" => array("pink", "lightgreen", "lightblue")
        );
    ?>

<table border = '1' cellpadding=10 cellspacing=0 >
    <?php

    foreach($colores as $claves => $tipos){
        echo "<tr><td>$claves</td>";
        foreach($tipos as $color => $valor){
            echo "<td BGCOLOR='$valor'>$valor:</td>";
        }
     }
    ?>
</table>
</body>
</html>
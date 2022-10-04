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
        
        print_r($claves);
    ?>

</body>
</html>
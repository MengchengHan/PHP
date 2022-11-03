<?php
    $mysqli = new mysqli("localhost", "root", "", "empresa");

    if($mysqli -> connect_errno){
        echo "Error al conectar con la base de datos MySQL: " . $mysqli->connect_errno . " " . $mysqli->connect_error;
    }
    
    echo $mysqli->host_info . "<br>";

    $query = "SELECT * FROM usuarios";
    $resultado = $mysqli->query($query) or die($mysqli->error . " en la línea " . (__LINE__-1));    

    while($registro = $resultado->fetch_assoc()){
        echo "<pre>" . print_r ($registro) . "</pre>"; 
    }

    
    $mysqli->query($query);

    while($registro = $resultado->fetch_assoc()){
        echo ($registro); 
    }

    $mysqli->query("UPDATE usuarios SET rol = 1 WHERE Nombre like 'Tamara'");
    
    while($registro = $resultado->fetch_assoc()){
        echo ($registro); 
    }

    $resultado->free();
    $mysqli->close();
?>
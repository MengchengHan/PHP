<?php
    $db = new PDO('mysql:host=localhost; dbname=empresa','root', '');
    // $preparada = $db->prepare("SELECT nombre FROM usuarios where rol = ?");
    // $preparada->execute(array(0));
    // foreach($preparada as $usu){
    //     print "Nombre: " . $usu['nombre'] . "<br>";
    // }

    // $sentencia = $db->prepare("INSERT INTO usuarios VALUES ('', :nombre, :clave, :rol)");
    // $sentencia->bindParam(':nombre', $nombre);
    // $sentencia->bindParam(':clave', $clave);
    // $sentencia->bindParam(':rol', $rol);

    // $nombre = 'Tete';
    // $clave = 1234;
    // $rol = 1;
    // $sentencia->execute();
    
    // $sentencia = $db->prepare("INSERT INTO usuarios VALUES ('', ?, ?, ?)");
    // $sentencia->bindParam(1, $nombre);
    // $sentencia->bindParam(2, $clave);
    // $sentencia->bindParam(3, $rol);

    // $nombre = 'Teta';
    // $clave = 1234;
    // $rol = 2;
    // $sentencia->execute();

    $sentencia = $db->prepare("SELECT * FROM usuarios WHERE nombre = ?");
    if($sentencia->execute(array($_GET['nom']))){
        echo "<pre>" . print_r($sentencia->fetch(), true) . "</pre>";
    }
?>
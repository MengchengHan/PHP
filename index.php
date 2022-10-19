<?php
    echo ($_FILES['archivo']['name']) . "<br>";
    echo ($_FILES['archivo']['type']) . "<br>";
    echo ($_FILES['archivo']['size']) . "<br>";
    echo ($_FILES['archivo']['tmp_name']) . "<br>";
    echo is_uploaded_file($_FILES['archivo']['tmp_name']) . "<br>";
    
    
    // if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
    //     $nombreDirectorio = "../../img/";
    //     $nombreFichero = $_FILES['archivo']['name'];
    //     $nombreCompleto = $nombreDirectorio . $nombreFichero;
    //     if (is_file($nombreCompleto)) {
    //         $idUnico = time();
    //         $nombreFichero = $idUnico.'-'.$nombreFichero;
    //         $nombreCompleto = $nombreDirectorio.$nombreFichero;
    //     }
    //     move_uploaded_file($_FILES['archivo']['tmp_name'], $nombreCompleto);
    //     echo "Fichero subido con el nombre: " . $nombreFichero . "<br>";
    // } else {
    //     print("NO se ha podido subir el fichero");
    // }

    readfile($_FILES['archivo']['tmp_name']);
?>
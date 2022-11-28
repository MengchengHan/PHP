<?php
    $array = array("Sara", "Jose", "Dani", "Daniel");

    $nombre = $_REQUEST['nombre'];
    $sugerencia = "";

    if($nombre !== ""){
        $nombre = strtolower($nombre);
        $length = strlen($nombre);

        foreach($array as $nom){
            if(stristr($nombre, substr($nom, 0, $length))){
                if($sugerencia === ""){
                    $sugerencia = $nom;
                } else {
                    $sugerencia = $sugerencia . ", " . $nom ;
                }
            }
        }
    }
    // echo $sugerencia;
    if($sugerencia === ""){
        echo "NO hay sugerencias";
    } else {
        echo $sugerencia;
    }
?>
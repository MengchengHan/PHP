<?php 
    function vcolor($color){
        if ($color != '#ffffff' && !empty($color)) {
            echo "Color fuera de rango ";
        }
    }

    function vnombre($nombre){
        if(!ctype_upper(substr($nombre, 0, 1)) && !empty($nombre)){
            echo "Nombre mal escrito tonto ";
            return false;
        }
    }

    function vapellido($apellido){
        if(!ctype_upper(substr($apellido, 0, 1)) && !empty($apellido)){
            echo "Apellido mal escrito tonto ";
            return false;
        }
    }

    function vemail($email){
        if(!str_contains($email, '@') && !empty($email)){
            echo "Email mal escrito tonto ";
            return false;
        }
    }

    function vfecha($fecha){
        if(date('y', strtotime($fecha)) < 2021 && !empty($fecha)){
            echo "Fecha anterior a 2021 tonto ";
            return false;
        }   
    }

    function vedad($edad){
        if($edad < 18 && !empty($edad)){
            echo "Edad menor de 18";
            return false;
        }   
    }
?>
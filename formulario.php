<?php
    $estaciones = $_REQUEST["estaciones"];
    $color = $_REQUEST["color"];
    $search = $_REQUEST["search"];
    $name = $_REQUEST["name"];
    $last_name = $_REQUEST["last_name"];
    $email = $_REQUEST["email"];
    $fecha_nac = $_REQUEST["fecha_nac"];
    $age = $_REQUEST["age"];
    $url = $_REQUEST["url"];
    $schedule = $_REQUEST["schedule"]; 
    $status;
    $str_err;

    if($estaciones == null){
        $status = true;
        $str_err = "Falta el campo Estación del año fav";
    } elseif ($search == null){
        $status = true;
        $str_err = $str_err . "Falta el campo buscar";
    } elseif ($name == null){
        $status = true;
        $str_err = $str_err . "Falta el campo nombre";
    } elseif ($last_name == null){
        $status = true;
        $str_err = $str_err . "Falta el campo apellido";
    } elseif ($email == null){
        $status = true;
        $str_err = $str_err . "Falta el campo email";
    } elseif ($fecha_nac == null){
        $status = true;
        $str_err = $str_err . "Falta el campo fecha_nac";
    } elseif ($age == null){
        $status = true;
        $str_err = $str_err . "Falta el campo edad";
    } elseif ($url == null){
        $status = true;
        $str_err = $str_err . "Falta el campo web";
    } elseif ($schedule == null){
        $status = true;
        $str_err = $str_err . "Falta el campo horario";
    }

    if(isset($status)){
        echo $str_err;
    } else {
        header("Location:welcome.html");
    }
?>
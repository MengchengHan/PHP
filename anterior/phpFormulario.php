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
    $status = false;
    $str_err = "";

    if($estaciones == null){
        $status = true;
        $str_err = "Falta el campo Estación del año fav" . "<br>";
    } 
    if ($search == null){
        $status = true;
        $str_err = $str_err . "Falta el campo buscar" . "<br>";
    } 
    if ($name == null){
        $status = true;
        $str_err = $str_err . "Falta el campo nombre" . "<br>";
    } 
    if ($last_name == null){
        $status = true;
        $str_err = $str_err . "Falta el campo apellido" . "<br>";
    } 
    if ($email == null){
        $status = true;
        $str_err = $str_err . "Falta el campo email" . "<br>";
    } 
    if ($fecha_nac == null){
        $status = true;
        $str_err = $str_err . "Falta el campo fecha_nac" . "<br>";
    } 
    if ($age == null){
        $status = true;
        $str_err = $str_err . "Falta el campo edad" . "<br>";
    } 
    if ($url == null){
        $status = true;
        $str_err = $str_err . "Falta el campo web" . "<br>";
    } 
    if ($schedule == null){
        $status = true;
        $str_err = $str_err . "Falta el campo horario" . "<br>";
    }

    if($status){
        echo $str_err;
    } else {
        header("Location:welcome.html");
    }
?>
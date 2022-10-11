<?php
    $datosLog = array("usuario"=>"1234", "han" => "4567");

foreach ($datosLog as $key => $value) {
    if(array_key_exists($_REQUEST["user"], $datosLog)){
        if($_REQUEST["password"] === $datosLog[$_REQUEST["user"]]){
            header("Location:welcome.html");
        }
    } else{
        header("Location:user_pass_incorrect.html");
    }
}
?>
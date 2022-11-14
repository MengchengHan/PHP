<?php

    $mysqli = new mysqli('localhost', 'root', '', 'credenciales');
    $user = $_POST['user'];
    $query = "SELECT pass FROM CREDENCIALES WHERE user LIKE '$user'";                
    $pass = $_POST['pass'];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(mysqli_connect_errno()){
            echo 'Ha fallado la conexión a la base de datos.';
        } else {
            $resultado = $mysqli->query($query);
            $query_pass = mysqli_fetch_column($resultado);
            if($pass == $query_pass){
                header("Location: welcome.html");
            } else{
                header("Location: user_pass_incorrect.html");
            }
        }
    }
?>
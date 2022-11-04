<?php
    $mysqli = new mysqli('localhost', 'root', '', 'credenciales');
    $user = 'Han';
    $query = 'SELECT pass FROM CREDENCIALES WHERE user LIKE ' . $uservf;                
    //$pass = $_POST["pass"];
    echo $query;
    // if(mysqli_connect_errno()){
    //     echo 'Ha fallado la conexión a la base de datos.';
    // } else {
    //     $resultado = $mysqli->query($query);
    //     print_r(mysqli_fetch_row($resultado));
    //     //header("Location:welcome.html");
    //     //} else{
    //         header("Location:user_pass_incorrect.html");
    // }
?>
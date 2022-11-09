<?php
    $user = $_POST['user'];
    $db = new mysqli ('localhost', 'root', '', 'empresa');

    
    // $resultado = $db->query("SELECT * FROM usuarios WHERE nombre = '$user'");
    
    // foreach($resultado->fetch_all() as $k => $v) {
    //     print_r($v) . "<br>";
    // }
        
    echo password_hash("", PASSWORD_DEFAULT);
?>
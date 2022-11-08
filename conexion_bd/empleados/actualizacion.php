<?php
    $db = new pdo('mysql:host=localhost; dbname=empresa', 'root', '');    
    $new = 'Teta';
    $old = 'Tete';
    $sql = "UPDATE usuarios SET nombre = ? WHERE nombre = ? ";

    $statement = $db->prepare($sql);
    $statement->bindParam(1, $new);
    $statement->bindParam(2, $old);
    $statement->execute();

?>
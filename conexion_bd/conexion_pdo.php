<?php
    try {
        $mydb = new pdo('mysql:host=localhost; dbname=credenciales', 'root', '');
        // foreach($mydb->query('SELECT * FROM usuarios') as $fila){
        //     echo "<pre>" . print_r($fila, true) . "</pre>";
        // }
        // $insert = "insert into usuarios values ('', 'C', '1234', '1')";
        // //$resultado1 = $mydb->query($insert);
        // $ultimoid = $mydb->lastInsertId();
        // $update = "UPDATE usuarios SET rol = 0 WHERE rol = 3";
        // $delete = "Roll";
        // $resultado2 = $mydb->query($delete);
        
        //     if ($resultado2) {
        //         echo 'Update correcto <br>';
        //         echo $resultado2->rowCount() . ' filas actualizadas' . "<br>";
        //     } else {
        //         //print_r($mydb->errorInfo());
        //     }
        
        $mydb->beginTransaction();
        $insert = "INSERT INTO credenciales VALUES('GG', '1234')";
        $resultado = $mydb->query($insert);

    if ($resultado) {
        echo "error" . print_r($mydb->errorInfo());
        $mydb->rollBack();
        echo 'Transacción anulada';
    } else {
        $mydb->commit();
    }
        $mydb = null;

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>
<?php

    try{
    $db = new PDO('mysql:host=localhost; dbname=empresa','root', '');
    
    //$db->beginTransaction();
    // $db->exec("DELETE FROM empleados WHERE id = 4");
    // $db->exec("INSERT INTO antiguos_emp VALUES ('4', 'Benito')");
    
    $allEmployees = $db->query("SELECT * FROM usuarios");
    //$db->commit();
    
    foreach ($allEmployees as $emp) {
        print "id " . $emp['id'] . "<br>";
        print "nombre " . $emp['nombre'] . "<br>";
        print "clave " . $emp['clave'] . "<br>";
        print "rol " . $emp['rol'] . "<br>";
    }

    } catch(Exception $e) {
        // $db->rollBack();
        echo 'Ha fallado la transacción: ' . $e->getMessage();
    }
?>  
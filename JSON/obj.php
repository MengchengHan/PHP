<?php
    error_reporting(0);

    $obj = (object) array('nombre' => 'Mengcheng', 'apellido' => 'Han');

    $myJSON = json_encode($obj);
    echo $myJSON;

?>
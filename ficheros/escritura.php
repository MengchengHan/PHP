<?php
    $fp = fopen('archivo.txt', 'a+');
    fwrite($fp, '4');
    fwrite($fp, '43');
    fwrite($fp, '432');
    fwrite($fp, '4321');
    fclose($fp);
    ?>
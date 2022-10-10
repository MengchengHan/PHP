
    <?php
        echo "Hola ";
        foreach($_GET as $c => $v){
            if(!is_null($v)){
                echo $v;
            }
        }   
    ?>
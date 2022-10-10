<?php

    echo "<body bgcolor='pink'></body>";
    if(check_null()){
        echo "Esta es la suma: " . suma();
    } else{ 
        echo "Faltan datos";
    }
    
    function check_null(){
        foreach($_GET as $c => $v){
            if(!is_null($v) && is_numeric($v)){
                return true;
            } else {
                return false;
            }
        }
    }
    
    function suma(){
        return $_GET["num1"] + $_GET["num2"];
    }
?>
<?php
    $e1=true;
    $e2=false;
    $e3=true;
    echo !$e2.'es true'.'<br>';
    if ($e1 and $e3){
        echo "son verdaderos los dos <br>";
    }else{
        echo "un valor es falso";
    }
    if($e1 or $e2){//verdadero si una de las dos variables es verdadero
        echo "son verdaderos los dos <br>";
        
    }else{
        echo "los dos son falsos <br>";
    }
?>


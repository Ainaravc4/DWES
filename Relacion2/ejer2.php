<?php
function factorial($n){
    $factorial = 1;
    
    if(!isset($n)){
        if($n>1){
            for ($i = 1; $i <= $n; $i++){ 
                $factorial = $factorial * $i; 
            } 
        }else
            echo "tiene que ser mayor a uno";
    }else
        echo "no hay ninguna variable";
return $factorial; 
}

$resultado = factorial(0); 
echo "<br>Factorial es  = $resultado"; 


//forma recursiva
function factorial2($n){
    
    if($n==1)
        return 1;
    else
        return $n * factorial2($n-1);
}
 
$resultado = factorial2(3);
echo "<br>Factorial es  = $resultado";
?>



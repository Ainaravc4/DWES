<?php

function factorial($n){
    $factorial = 1;
    
    if(isset($n)){
        if($n>1){
            for ($i = 1; $i <= $n; $i++){ 
                $factorial = $factorial * $i; 
            } 
        }else{
            throw new InvalidArgumentException('<br>No puede ser menor o igual a 0 <br>');
        }
        
    }
return $factorial; 
}

try{
    $resultado = factorial(0); 
    echo "<br>Factorial es  = $resultado"; 
} catch (InvalidArgumentException $e) {
    echo "Ha habido un error".$e->getMessage()."<br>";
}


?>

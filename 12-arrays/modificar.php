<?php
$arr1=array(
    "viernes"=>55,
    "viernes"=>77
);

//al utilizar el & se puede modificar la variable
foreach ($arr1 as &$cantidad){
    $cantidad=$cantidad*2;
    
    print_r($arr1);
}
?>

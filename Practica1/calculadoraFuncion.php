<?php
function suma($n1,$n2){
    return $n1+$n2;
}
function resta($n1,$n2){
   return $n1-$n2;
}
function mult($n1,$n2){
    return $n1*$n2;
}
function calculador($operador,$n1,$n2){
    $texto= $operador($n1,$n2);
    return $texto;
}
echo calculador(resta, 5, 6);
?>


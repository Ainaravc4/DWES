<?php

function añadir($arr,$n){
    if(count($arr)<=120)
        array_push($arr,$n);
    return $arr;
}


function mostrarArray($arr){
    foreach ($arr as $n){
        echo ($n)." ";      
}
}

$numeros=array(1,5,9,4,6);

mostrarArray(añadir($numeros, 9));

$arr1=array();

/*for ($i=0;$i<120;$i++)
    array_push($arr,$i);**/
?>

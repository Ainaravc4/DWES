<?php

$arr=[];
for ($i=0;$i<=15;$i++){
    $arr[$i]= rand(1,9);
}
$arraylenght=count($arr);//esto nos devuelve el tamaño
foreach ($arr as $n)
    echo $n." ";

for ($i=0;$i<15;$i++){
    $aux=$arr[$i+1];
    $arr[$i+1]=$arr[0];
    $arr[0]= $aux;
    
}

echo "<br>";
foreach ($arr as $n)
    echo $n." ";
?>


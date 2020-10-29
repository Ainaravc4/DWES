<?php
$arr1=array(2,6,8,4,6,3,7,9);

function mostrarArray($arr){
    foreach ($arr as $n){
        echo ($n)." ";      
}
     
    
}
mostrarArray($arr1);

echo "<br>";
asort($arr1);
mostrarArray($arr1);


echo "<br> La cantidad es de: ".count($arr1);

$buscar= array_search('4', $arr1);

if(!empty($buscar))
    echo "<br>".$buscar;
else
    echo "no esta dentro del array";


$buscar= array_search($_GET['n'], $arr1);
echo "<br>".$buscar;

?>


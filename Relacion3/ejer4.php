<?php
$arr1 = array();


for ($x=0;$x<20;$x++) {
  $num_aleatorio = rand(0,100);
  array_push($arr1,$num_aleatorio);
  echo $arr1[$x]." ";
}


echo "<br>";
$cuadrados=array();
$cuadrados=$arr1;

for ($x=0;$x<20;$x++) {
    $cuadrados[$x]=$cuadrados[$x]*2;
  echo $cuadrados[$x]." ";
}

echo "<br>";
$cubo=array();
$cubo=$arr1;

for ($x=0;$x<20;$x++) {
    $cubo[$x]=$cubo[$x]*3;
  echo $cubo[$x]." ";
}

?>

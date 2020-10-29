<?php

$valores = array();
for ($x=0;$x<10;$x++) {
  $num_aleatorio = rand(0,1);
  array_push($valores,$num_aleatorio);
  echo $valores[$x]." ";
}

echo "<br>";
$vuelta=array_reverse($valores);

for ($x=0;$x<10;$x++) {
  echo $vuelta[$x]." ";
}


?>

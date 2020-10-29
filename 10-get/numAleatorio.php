<?php
$n1= rand();
$n2= rand();

echo $n1." Y ".$n2;
if($n1===$n2)
    echo "<br> ambos numeros son iguales <br>";
else if($n1<$n2)
    echo "<br>".$n2." es el mayor <br>";
else if($n1>$n2)
    echo "<br>".$n1." <br>es el mayor <br>";
?>


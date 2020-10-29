<?php
//paso de variable por copia
echo "<br> Variable por COPIA<br>";
function duplicar($n){
    $n=$n*2;
}
$numero=5;
duplicar($numero);
echo $numero;

//paso de variable por valor
echo "<br> Variable por VALOR<br>";
function duplicar2(&$n){
    $n=$n*2;
}
$numero=5;
duplicar2($numero);
echo $numero;
?>

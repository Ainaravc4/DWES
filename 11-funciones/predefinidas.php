<?php
echo date('d-m-Y')."<br>";

echo pi()."<br>";

echo round(7.4562,3)."<br>";

echo rand(10,40)."<br>";


$var4="hola";
echo gettype($var4)."<br>";

if(is_string($var4)){
    echo "es una cadena <br>";
}
if(isset($edades)){
    echo "la variable existe<br> ";
}else{
    echo "no existe <br> ";
}
echo "<br>";


$texto="  mi frase     ";
var_dump(trim($texto));//borra los espacios

$year=2020;
unset($year);//elimina la variable
var_dump($year);

$frase="ainara vazquez";
echo str_replace($frase, $year, $texto)
?>

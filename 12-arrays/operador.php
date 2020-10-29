<?php
$arr1=array(
    1=>"55",
    2=>"77"
);
$arr2=array(
    1=>55,
    2=>77
);
$arr3=array(
    1=>"77",
    2=>"55"
);

if ($arr1==$arr2)
    echo "<br>son iguales";
else
    echo "<br>no son igales";

if ($arr1==$arr3)
    echo "<br>son iguales";
else
    echo "<br>no son igales";


if ($arr1===$arr2)
    echo "<br>son iguales";
else
    echo "<br>no son identicos";

if ($arr1===$arr3)
    echo "<br>son iguales";
else
    echo "<br>no son identicos";

?>

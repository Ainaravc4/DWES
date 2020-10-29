<?php
$i=0;
echo "primer swicth <br>";
while($i<2){
    switch ($i){
        case 0:
            echo "Es un cero <br>";break;
        case 1:
            echo "es un uno <br>";break;
    }
    $i++;
}

$i=0;
echo "<br>segundo swicth <br>";
while($i<2){
    switch ($i){
        case 0:
            echo "Es un cero <br>";break 2;
        case 1:
            echo "es un uno <br>";break;
    }
    $i++;
}
?>


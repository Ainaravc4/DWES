<?php

$a=1;
echo '<h2>Variable local</h2>';
echo 'vamos a sumarle dos a una variable inicializada con el valor:'.$a.'<br>';
echo'probamos que ocurre si es de ambito local en una funcion <br>';

function sumale2(){
    //la variable a no se ve aqui dentro porque es local
    $b=$a+2;
    echo 'la suma es '.$b.'porque la variable $a dentro de esta funcion no esta asignado<br>';
    echo 'es decir, su valor es null y php antes de sumarle da el valor 0<br>';
};
sumale2();


echo'<h2>Variables global</h2>';
function sumale2_global(){

    global $a;
    //al hacer lo esto ahora la variable a ya si tiene el valor 1
    $b=$a+2;
    echo 'la suma es '.$b;
};
sumale2_global();
?>


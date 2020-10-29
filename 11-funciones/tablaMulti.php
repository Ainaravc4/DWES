<?php
/*function tablaMulti($num){
    echo "<h3>Tabla de multiplicar del numero $num </h3>";
    for ($i=1;$i<=10;$i++){
        $multi=$num*$i;
        echo "$num x $i = $multi <br>";
    }
}
tablaMulti(8);

//Pasamos el parametro desde el navegador
if (isset($_GET['n'])){
    tablaMulti($_GET['n']);
}else{
    echo "no hay numero que mostrar";
}

//esta la llamara a la funcion 4 veces
for ($i=1;$i<=4;$i++)
    tablaMulti($i);*/


// si no se le pasa valores a la funcion
/*function calc($n1, $n2){
if (isset($n1)&& isset($n2)){
    if (is_numeric ($n1)|| is_numeric ($n2)){
        echo $n1.' + '.$n2.' es '.($n1+$n2).'<br>';
        echo $n1.' - '.$n2.' es '.($n1-$n2).'<br>';
        
    }else{
        echo "el valor no es tipo numerico";
    }  
}else{
    echo "No hay ningun valor";
}
}
calc(5,6);*/


//Dar valores por defecto

/*function calc($n1, $n2, $negrita=false){
if (isset($n1)&& isset($n2)){
    if (is_numeric ($n1)|| is_numeric ($n2)){
        echo $n1.' + '.$n2.' es '.($n1+$n2).'<br>';
        echo $n1.' - '.$n2.' es '.($n1-$n2).'<br>';
        
    }else{
        echo "el valor no es tipo numerico";
    }  
}else{
    echo "No hay ningun valor";
}
if($negrita)
    echo "<b> $n1 </b>"

}
calc(5,6);*/

// Dandole un valor fijo a una variable
function calculadora ($n1, $n2, $negrita=false){
    $suma=$n1+$n2;
    $resta=$n1-$n2;
    $cadena="";
    
    if($negrita)
        $cadena.="<b>";//le concatenamos codigo
        
    $cadena.="calculadora <br>";
    $cadena.="suma: $suma <br>";
    $cadena.="resta: $resta <br>";
    
    if($negrita)
        $cadena.="</b>";
    
    $cadena.="<hr>";
    return $cadena;

}
echo calculadora(10, 5);
echo calculadora(4, 5, true);
echo calculadora(1, 5, false);
?>


<?php
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
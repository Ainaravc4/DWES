<?php
function matricula($valida){
    if (preg_match('/^[0-9]{4}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}$/',$valida)){
        echo "es correcta";
    }else{
        echo "es incorrecta REVISA";
    }          
}
matricula('5555DVL');

/*$num=substr($valida,0,4);
$todosnumeros=ctype_digit($num);
if(!$todosnumeros)return false;
$letras= substr($matricula)*/

function matricula2($matricula){
 if (strlen($matricula)!=7)
     $num= substr ($matricula, 0,4);
     $todosnumeros= ctype_digit($num);
     
     if(!$todosnumeros) 
         return false;
     
     $letras= substr($matricula, 4,3);
     $mayus= ctype_upper($letras);
     
     if(!$mayus) 
         return FALSE;
     
     //COMPROBAR QUE NO APAREZCAN LAS VOCALES
     $vocales= strpbrk($letras, "AEIOU");
     
     if ($vocales===FALSE) 
         return TRUE;
     else 
         return False;
 }
 $cad="5555DVL";
 if(!matricula($cad))
     echo "<br>la cadena es valida";
 else
    echo "<br>NO ES VALIDA";
 
?>
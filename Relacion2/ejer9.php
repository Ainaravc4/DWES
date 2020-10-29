<?php
function contraseña($texto){
    if(strlen($texto)>=6&&strlen($texto)<=15){
        if (preg_match('/([0-9]+)/',$texto)){
            if (preg_match('/([A-Z]+)/',$texto)){
                if (preg_match('/([a-z]+)/',$texto)){
                    if (preg_match('/\W+/',$texto)){
                        echo "la contraseña $texto es correcta";
                    }else{
                        echo "la contraseña debe llevar aunque sea un caracter no alfanumérico";
                    }
                }else{
                    echo "La contraseña es incoreccta debe llevar las siguientes condiciones"
                    . "<br>– Al menos una letra minúscula.  ";
                }
            }else{
                echo "La contraseña es incoreccta debe llevar las siguientes condiciones"
                . "<br>– Al menos una letra mayúscula.";
            }
        }else{
            echo "La contraseña es incoreccta debe llevar la siguiente condicion"
            . "<br> – Al menos un número. ";
        }
            
    }else{
        echo "La contraseña es incoreccta debe llevar las siguientes condiciones"
        . "<br>– Entre 6 y 15 caracteres.";
                    
    }
}
contraseña("56AVs");

/*ctype_upper
 * 
 * for ($i=0;$i<$texto.lenght;$i++)
ctype_lower($cadena[$i]) minus=true
ctype_digit--indica si hay numeros numeros=true
 * ctype_alnum --indica caracteres noalfanumericos*/
/*return $minus and $mayus and $numeros-- esto indica que tiene que cumplir todas las condiciones*/
?>

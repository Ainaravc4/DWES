<?php
function vacia($texto){
    
    if(empty($texto)){
        $texto="no has pasado ningun texto";
        $texto=strtoupper($texto);
    }
    
    return $texto;
}


echo vacia("hola");

?>


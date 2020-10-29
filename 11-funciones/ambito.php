<?php
$frase="No hay caminos para la paz";
echo $frase;
function mifuncion(){
    global $frase;
    echo "<h1>$frase </h1>";
   
}
?>

<?php
function manejador($errno,$str,$file,$line){
    echo "ocurrio el error: $errno";
}
set_error_handler("manejador");
$a=$b;
?>
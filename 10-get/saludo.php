<?php

if (empty($_GET["nombre"])){
    echo "ERROR, falta el parámetro nombre";
}else{
    echo "Hola ".$_GET["nombre"];
}


/*if (isset($_GET["nombre"])==null){
    echo "ERROR, falta el parámetro nombre";
}else{
    echo "Hola ".$_GET["nombre"];
}*/


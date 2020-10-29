<?php
function getNombre($nombre){
    $texto="el nombre es $nombre";
    return $texto;
}
function getApellido($apellido){
    $texto="el nombre es $apellido";
    return $texto;
}
function MuestraNombre($nombre, $apellido){
    $texto= getNombre($nombre)."<br>". getApellido($apellido);
    return $texto;
}
echo MuestraNombre(lola, Vazquez);
?>

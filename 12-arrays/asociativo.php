<?php
//ARRAYS ASOCICATIVOS

$personas=array(
    'nombre'=>'Belen',
    'apellido'=>'hola'
    
);
var_dump($personas); 
echo "esta persona se llama".$personas['nombre'];

$arr2=array(
    "1"=>"yo",
    "2"=>"yo2",
    "3"=>"yo3"
);
foreach($arr2 as $codigo => $nombre){
    echo "codigo: $codigo nombre: $nombre";
}
 ?>


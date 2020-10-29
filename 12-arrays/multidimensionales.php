<?php
$contactos= array(
    array(
        'nombre'=>'ainara',
        'apellido'=>'vazqyez'
    ),
    array(
        'nombre'=>'nerea',
        'apellido'=>'rodriguez'
    )
);
var_dump($contactos);

echo $contactos[0]['nombre']."<br>";
echo $contactos[1]['apellido']."<br>";

foreach ($contactos as $key=>$contactos)
    echo $contactos['nombre']."<br>";
?>

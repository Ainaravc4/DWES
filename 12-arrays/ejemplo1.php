<?php
$peliculas = array('Tiburon','King Kong');
echo "<br>este es el contenido de l array peliculas";
var_dump($peliculas);

echo "<br>muestro la pelula que deseo";
var_dump($peliculas[2]);

$flores= array('rosa', 'tulipan');
echo $flores[0];

$arr1=array(10,20,30);
print_r($arr1);

$arr1[]=5;// añade el 5 en la ultima posicion

$arr1[4]=6;//le indicamos donde queremos añadir

$arr1=[
    0=>444,
    1=>222,
    2=>666,
   
];
print_r($arr1);


for($i=0;$i<count($peliculas);$i++){
    echo "<li>".$peliculas[$i]."</li>";
}
echo "<ul>";
foreach($flores as $flor){
    echo "<li>".$flor."</li>";
}
echo "</ul>";
?>
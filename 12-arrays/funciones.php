<?php
$peliculas = array('Tiburon','King Kong');
$numeros=array(1,5,9,4,6);

asort($peliculas);
var_dump($peliculas);

array_push($peliculas,"Origen");
array_pop($peliculas);

//sacar un elemneto aleatorio

$indice=array_rand($peliculas);
$buscar= array_search('Tiburon', $peliculas);
echo count($peliculas)."<br>";
?>

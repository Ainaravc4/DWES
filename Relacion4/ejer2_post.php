<?php
echo "<h1>".$_POST['nombre']."</h1>";

$secret=$_POST['contraseña'];
$tamaño= strlen($secret);//tamaño de una cadena caracteres

for($i=0;$i<$tamaño;$i++)
{
	$secret[$i]='*';
        
}
echo "<h1>".$secret."</h1>";
?>


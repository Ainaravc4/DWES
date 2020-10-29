<?php
function buenasDias(){
    return "Hola, buenos dias";
}
function buenasTardes(){
    return "Hola, buenas tardes";
}
function buenasNoches(){
    return "¿Te vas a dormir? Buenas noches";
}
/*$horario="Noches";
$mifuncion="buenas".$horario;
echo $mifuncion();*/

$horario=$_GET['horario'];
$mifuncion="buenas".$horario;
echo $mifuncion();

?>

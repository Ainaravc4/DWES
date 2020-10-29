<?php

$nomLogin="usuario";
$conLogin="1234";

try{
$secret=$_POST['contraseña'];
$nombre=$_POST['nombre'];
if($nombre===$nomLogin && $secret===$conLogin)
    header("Location: ejer3_HOLA.php");
else {
    throw new Exception('<br>Usted NO esta registrado <br>');
}
} catch (Exception $e){
     echo "Ha habido un error".$e->getMessage()."<br>";
}




/*try{
$secret=$_POST['contraseña'];
$nombre=$_POST['nombre'];
if($nombre===$nomLogin && $secret===$conLogin)
    echo "<h1> BIENVENIDO/A A SU SESION </h1>";
else {
    throw new Exception('<br>Usted NO esta registrado <br>');
}
} catch (Exception $e){
     echo "Ha habido un error".$e->getMessage()."<br>";
}*/
?>



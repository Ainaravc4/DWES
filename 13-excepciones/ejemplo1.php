<?php
//como capturar una excepcion
try{
    if(isset($_GET['id'])){
        echo "<h1> el parametro es: {$_GET['id']}</h1>";
    }else{
        throw new Exception('<br>Faltan parametros <br>');
    }
    
} catch (Exception $ex) {//captura el error y devuelve algo
    echo "Ha habido un error".$ex->getMessage()."<br>";
} finally {// lo que hacemos haya habido o no excepcion. No se suele usar
    echo "todo correcto";
}
?>


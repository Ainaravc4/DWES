<?php
function potencia($b,$e=2){
    if(!empty($b)&&!empty($e)){
        settype($b, 'int');
        settype($e, 'int');
        $result= pow($b, $e);
    }
    return $result;
}
$n=$_GET["b"];
$n2=$_GET["e"];
echo potencia($n,$n2);
?>


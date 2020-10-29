<?php

if ($_GET["n1"]>$_GET["n2"]){
    for ($i=$_GET["n2"]+1;$i<$_GET["n1"];$i++)
        echo $i." ";
}else{ 
    for ($i=$_GET["n1"]+1;$i<$_GET["n2"];$i++)
        echo $i." ";
}          

?>

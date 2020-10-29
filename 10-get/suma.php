<?php

if (empty($_GET["n2"]) or empty($_GET["n1"])){
    echo "no se encuentran valores numericos";
    return; 
}
   
if (!is_numeric($_GET["n2"])|| !is_numeric($_GET["n1"])){
    echo "introduce valores numericos"; 
}  
else
    echo $_GET["n1"].' + '.$_GET["n2"].' = '.($_GET["n1"]+$_GET["n2"]);



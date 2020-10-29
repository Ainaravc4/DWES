<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php
if (isset($_GET["n1"])&& isset($_GET["n2"])){
    if (is_numeric($_GET["n1"])|| is_numeric($_GET["n2"])){
        echo $_GET["n1"].' + '.$_GET["n2"].' es '.($_GET["n1"]+$_GET["n2"]).'<br>';
        echo $_GET["n1"].' - '.$_GET["n2"].' es '.($_GET["n1"]-$_GET["n2"]).'<br>';
        echo $_GET["n1"].' * '.$_GET["n2"].' es '.($_GET["n1"]*$_GET["n2"]).'<br>';
        echo $_GET["n1"].' / '.$_GET["n2"].' es '.($_GET["n1"]/$_GET["n2"]).'<br>';
        echo $_GET["n1"].' % '.$_GET["n2"].' es '.($_GET["n1"]%$_GET["n2"]).'<br>';
        echo $_GET["n1"].' ^ '.$_GET["n2"].' es '.($_GET["n1"]**$_GET["n2"]).'<br>'; 
    }else{
        echo "el valor no es tipo numerico";
    }  
}else{
    echo "No hay ningun valor";
}
    
?>
</body>
</html>




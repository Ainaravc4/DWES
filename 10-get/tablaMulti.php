<?php
for($i=1;$i<=10;$i++){
    echo "<h2>Tabla del ".$i."</h2><br>";
    for($j=1;$j<=10;$j++)
        echo $j."x".$i."=".$j*$i."<br>";
}
?>


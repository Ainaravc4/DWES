<?php

$i = 0;
while ($i++ < 5) {
    echo "Exterior<br />\n";
    while (1) {
        echo "Medio<br />\n";
        while (1) {
            echo "Interior<br />\n";
            continue 3;
        }
        echo "Esto nunca se imprimirá.<br />\n";
    }
    echo "Ni esto tampoco.<br />\n";
}
?>
?>

<?php
function primo($n1){
    $cont=0;
    for($i=1;$i<=$n1;$i++){
        if ($n1%$i==0)
            $cont++;
    }
    if($cont<=2)
        echo "el numero $n1 es primo";
    else
        echo  "el numero $n1 no es primo";
        
}
primo(4);
?>

<?php
function mcd($n1,$n2){
    if($n2==0)
        return $n1;
    else
        $result= mcd($n2, $n1 % $n2);
    return $result;
}
echo mcd(4,12);
?>

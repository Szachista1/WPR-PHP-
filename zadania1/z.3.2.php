<?php
function roll($t)
{
    for($i=0;$i<$t;$i++){
        $a[$i]=rand(1,6);
    }
    return $a;
}
$a= roll(20);
print_r($a);
?> 

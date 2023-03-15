<?php
// Enter your code here, enjoy!
$zm1;
$a=12;
$b=21;
$h=9;

function zmienna(){
    global $zm1;
    $zm1 = rand(1,3);
}

function trujkat($a, $h){
    $pole = $a * $h / 2;
    return $pole;
}

function prostokat($a, $b){
    $pole1 = $a * $b;
    return $pole1;
}

function trapez($a, $h, $b){
    $pole2 = ($a + $b) * $h / 2;
    return $pole2;
}

zmienna();

switch ($zm1){
    case '1': echo trujkat($a,$h); break;
    case '2': echo prostokat($a,$b); break;
    case '3': echo trapez($a,$h,$b); break;
}
?>
<?php
$zdanie="polska lol zieloni";
function cenzura($zdanie)
{
    $t=array("lol");
    $t1=explode(" ",$zdanie);
    foreach($t as $s){
        while (in_array($s,$t1) {
            $tab2[array_search($s, $t1)] = "**";
        }
    }
    $p=implode(" ",$t1);
    return $p;
}
echo cenzura($zdanie);
?>
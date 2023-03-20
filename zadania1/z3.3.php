<?php
// Enter your code here, enjoy!

function a($z){
    echo "0 ";
    for($i=1;$i<=$z;$i++){
        for($j=1;$j<=$z;$j++){
            $t[$i][$j]=$i*$j;
            echo $t[$i][$j]." ";
        }
    }
    echo "\n";


}
a(10);

?>

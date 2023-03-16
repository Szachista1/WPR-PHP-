<?php
function jakiej_narodowosci_jestem($U){
    $t=Array('USA'=>'Amerykanin','Polska'=>'Polak');
    return $t[$U];
}
echo jakiej_narodowosci_jestem('USA');
?>
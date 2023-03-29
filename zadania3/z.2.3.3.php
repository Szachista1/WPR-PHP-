<?php
if(isset($_GET['lo']))  {
    if(is_numeric($_GET['lo'])) {
        echo rekurencja($_GET['lo']);
        echo "<br/>";
        echo nierekurencja($_GET['lo']);
        $_GET['lo']=20;
        echo "</br>";
        $recSilniaStarttime=microtime(true);
        $recSilnia=rekurencja($_GET['lo']);
        $recSilniaStopTime=microtime(true);
        $standardSilniaStartTime=microtime(true);
        $standardSilnia=nierekurencja($_GET['lo']);
        $standardSilniaStopTime=microtime(true);
        $recSilniaTime=$recSilniaStopTime-$recSilniaStarttime;
        $standardSilniaStopTime=$standardSilniaStopTime-$standardSilniaStartTime;
        echo "Rek: ".$recSilniaTime;
        echo "</br>";
        echo "Nierec: ".$standardSilniaStopTime;
        echo "</br>";
        if ($recSilniaTime<$standardSilniaStopTime) echo "Rekurencja szybciej.";
        else echo "Nierekurencja szybciej. ";
}
}

function rekurencja($n) {

if ($n< 2) {
    return 1;
} else {
    return $n * rekurencja($n - 1);
}}
function nierekurencja($w){
    $result = 1;
    for($i = 1; $i <= $w; $i++) {
        $result *= $i;
    }
    return $result;
}


?>
<HTML>
<form name="trzy" action="z.2.3.3.php" method="get">Podaj liczbę n!<Input type=text name=lo><input type=submit name=oblicz></form>

</HTML>

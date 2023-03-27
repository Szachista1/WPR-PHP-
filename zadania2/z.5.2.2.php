<?php

if (isset($_POST['p'])) {

    $year = (int)$_POST['p'];
    if ($year>=1 && $year<=1582){
        $a=15;
        $b=6;
    }
    elseif ($year >= 1583 && $year <= 1699) {
        $a = 22;
        $b = 2;
    } elseif ($year >= 1700 && $year <= 1799) {
        $a = 23;
        $b = 3;
    } elseif ($year >= 1800 && $year <= 1899) {
        $a = 23;
        $b = 4;
    } elseif ($year >= 1900 && $year <= 2099) {
        $a = 24;
        $b = 5;
    } elseif ($year >= 2100 && $year <= 2199) {
        $a = 24;
        $b = 6;
    } elseif ($year >= 2200 && $year <= 2299) {
        $a = 25;
        $b = 0;
    }

    $c = $year % 19;
    $d = ($a + 19 * $c) % 30;
    $e = ($b + 2 * ($year % 4) + 4 * ($year % 7) + 6 * $d) % 7;

    $day = $d + $e + 22;

    if ($day > 31) {
        $month = "kwietnia";
        $day -= 31;
    } else {
        $month = "marca";
    }

    echo "Wielkanoc  " .  " wypada " . $day . " " . $month . ".";
}
?>

<HTML>
<FORM name="jeden" action="z.5.2.2.php" method="POST">
    Podaj rok aby obliczyć datę wielkanocy: <input name="p">
    <input type="submit" value="Oblicz">
</FORM>
</HTML>

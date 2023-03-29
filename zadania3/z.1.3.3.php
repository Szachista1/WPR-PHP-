<?php
if(isset($_GET['lo'])) {
    var_dump($_GET['lo']);
    $ty=date("l",strtotime($_GET['lo']));
    echo $ty;
    $birth=getdate(strtotime($_GET['lo']));
    $dzien1=$birth["mday"];
    $miesiac1=$birth["mon"];
    $rok1=$birth['year'];
    $timer1=mktime(0,0,0,$miesiac1,$dzien1);
    $data=getdate();
    $dzien=$data["mday"];
    $miesiac=$data["mon"];
    $rok=$data["year"];
   // if($dzien<10) $dzien="0" . $dzien;
   // if($miesiac<10) $miesiac="0". $miesiac;
    $time1=mktime(0,0,0);
    if($time1<$timer1)
        $r=abs(ceil(($time1-$timer1)/86400));
    else
        $r=365-abs(ceil(($time1-$timer1)/86400));
    echo "<br/>";
    echo "Masz urodziny za tyle ".$r. " dni.";
    echo "<br/>";
    if($time1<$timer1){
        $lata=$rok-$rok1-1;
        echo "Mam ".$lata. "lata.";

    }
    else{
        $lata1=$rok-$rok1;
        echo "Mam ".$lata1. "lata.";
    }

}
?>
<HTML>
<form name="trzy" action="z.1.3.3.php" method="get">
Wprowadź date urodzeń<Input type=date name=lo><Input Type=submit name=lol value="wyślij"></form>
</HTML>

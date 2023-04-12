<?php
session_start();
$_SESSION['imiona']=$_POST['imiona'];
$_SESSION['nazwiska']=$_POST['nazwiska'];
echo "Dane zamawiającego:";
echo "<br>";
echo "imię ". $_SESSION['imie'];
echo "<br>";
echo "Nazwisko ". $_SESSION['nazwisko'];
echo "<br>";
echo "Ulica ". $_SESSION['ulica'];
echo "<br>";
echo "Numer domu ". $_SESSION['numer_domu'];
echo "<br>";
echo "E-mail ". $_SESSION['e-mail'];
echo "<br>";
echo "Dane osób dodatkowych";
echo "<br>";
for ($i=0;$i<$_SESSION['liczba_dodatkowych_osób'];$i++) {
    echo "Imię ". $_SESSION['imiona'][$i];
    echo "<br>";
    echo "Nazwisko ". $_SESSION['nazwiska'][$i];
    echo "<br>";
}
?>


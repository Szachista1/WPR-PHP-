<?php
session_start();

?>

<HEAD>
    <<Body>
    <Title>Dane osób towarzyszących</Title>
</HEAD>

<B>Dodatkowe osoby</B>
<form method="POST" action="zad1c.php">
<?php
$_SESSION['imie']=$_POST['imie'];
$_SESSION['nazwisko']=$_POST['nazwisko'];
$_SESSION['ulica']=$_POST['ulica'];
$_SESSION['numer_domu']=$_POST['numer_domu'];
$_SESSION['e-mail']=$_POST['e-mail'];
$_SESSION['numer_telefonu']=$_POST['numer_telefonu'];
$_SESSION['liczba_dodatkowych_osób'] =$_POST['liczba_dodatkowych_osób'];
for ($i=0; $i<$_SESSION['liczba_dodatkowych_osób']; $i++){
  echo  "Imię: <INPUT type=\"text\" name=\"imiona[]\"><BR>";
  echo  "Nazwisko: <INPUT type=\"text\" name=\"nazwiska[]\"><BR>";
}
?>
<input type="submit" name="Wyślij"><BR>;
</form>
</Body>
</HTML>


<?php
session_start();
?>
<HTML>
<table>
<form action="zad2.php" method="get">
imię:<input type="text" name="imię"><br>
nazwsko:<input type="text" name="nazwisko"><br>
adres e-mail:<input type="email" name="email"><br>
Jaki błęd:<textarea id="as" name="błąd" rows="4" cols="50" size="255">Opisz błąd</textarea>
<!--    <input type="text" name="błąd" size="255"><br>-->
<input type="submit" name="zatwierdzenie"></form></table>
</HTML>

<?php
session_start()
?>
<HTML>
<HEAD>
    <TITLE>Dane głównej osoby</TITLE>
</HEAD>
<BODY>
<B>Dane zamawiającego</B>
<FORM method="POST" action="zad1b.php">
    Imię: <INPUT type="text" name="imie"><BR>
    Nazwisko: <INPUT type="text" name="nazwisko"><BR>
    Ulica: <INPUT type="text" name="ulica"><BR>
    Numer_domu: <input type="text" name="numer_domu"><BR>
    E-mail: <input type="e-mail" name="e-mail"><BR>
    Numer_telefonu: <input type="text" name="numer_telefonu"><BR>
    Liczba dodatkowych osób: <input type="text" name="liczba_dodatkowych_osób"><BR>
    <INPUT type="submit" value="Dalej">
</FORM>
</BODY>
</HTML>
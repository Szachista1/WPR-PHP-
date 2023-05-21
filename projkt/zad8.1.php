<?php
date_default_timezone_set('GMT');
$data=date_default_timezone_get();
session_start();
?>
<HTML>
<title>Forum internetowe</title>
<BODY>
<form action="zad8.2.php" method="post">
    Jęśli nie masz i nie masz u nas konta i nie chcesz mieć to wypełnij te dane:<br>
Temat:    <input type="text" name="temat"><br>
Wpis:    <input type="text" name="wpis"><br>
Data: <?php echo $data;
    ?><br>
Psełdonim:<input type="text" name="psełdonim">
    Witamy na forum internetowym.<br>
    Jeśli masz u nas konto to podaj e-mail oraz hasło.
    <input type="email" name="e-mail"><br>
    <input type="password" name="hasło">
    <input type="submit">
</form>
</BODY>

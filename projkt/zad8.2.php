
<?php
session_start();
if (!empty($_POST['e-mail']) || !empty($_POST['hasło'])){
if (isset($_POST['e-mail']) || isset($_POST['hasło'])){

}}
elseif (isset($_POST['temat'])) echo $_POST['temat'];
?>

<html>
<form method="post" action="zad8.3.php">
Wpis:    <input type="text" name="wpis">
Temat:    <input type="text" name="temat">
    <input type="submit" value="Wyślij" name="dział">
</form>
</html>
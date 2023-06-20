<?php
session_start();
$_SESSION['login']=$_POST['login'];
echo $_SESSION['login'];
?>
<HTML>
<form method="post">
    komentarz:<input type="text" name="komentarz">
</form>
</HTML>
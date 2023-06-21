<?php
session_start();
$_SESSION['wpis']=$_POST['wpis'];
$_SESSION['temat']=$_POST['temat'];
echo $_SESSION['wpis']."<br>";
echo $_SESSION['temat']."<br>".$_SESSION['psedonim'];
?><HTML>
<form action="komenatrz_do_zalogowanego.php" method="post">
komentarz:    <input type="text" name="tresc"><br>
psełdonim:    <input type="text" name="psedonim1"><br><input type="submit">

</form>
</HTML>
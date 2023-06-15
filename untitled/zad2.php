<?php
session_start();
?>
<HTML>
<form action="zad3.php" method="get">
    <?php
    $_SESSION['imię']=$_GET['imię'];
    $_SESSION['nazwisko']=$_GET['nazwisko'];
    $_SESSION['email']=$_GET['email'];
    $_SESSION['błąd']=$_GET['błąd'];
    echo $_SESSION['imię'];
    echo "<br>";
    echo $_SESSION['nazwisko'];
    echo "<br>";
    echo $_SESSION['email'];
    echo "<br>";
    echo $_SESSION['błąd'];
    ?>
<input type="submit">
</form>
</HTML>

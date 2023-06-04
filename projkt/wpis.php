<?php
session_start();
$_SESSION['wpis']=$_POST['wpis'];
$_SESSION['temat']=$_POST['temat'];
echo $_SESSION['wpis']."<br>";
echo $_SESSION['temat'];
?>
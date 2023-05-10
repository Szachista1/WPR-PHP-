<?php
session_start();
if(isset($_POST['zalogowany']) && isset($_POST['login']) && isset($_POST['hasło']))


?>
<HTML>
<head>
<body>
<title>
    Forum dyskusyjne internetowe
</title>
</head>
<form method="POST" action="forum.php">
Login(max 13):<input type="text" maxlength="13" name="login"><br>
Hasło:<input type="password" name="hasło"><br>
<input type="submit" name="zalogowany" value="użytkownik_zalogowany">
</body>
</HTML>

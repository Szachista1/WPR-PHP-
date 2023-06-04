<?php
session_start();
?>

<HTML>
<form action="zapisane_danych_użytkownika.php" method="post" enctype="multipart/form-data">
    <title>Logowanie</title>
    Dane do tworzenia konta:<br>
    E-mail:    <input type="email" name="e-mailn"><br>
    Hasło:    <input type="password" name="hasłon"><br>
    Pseudonim:    <input type="text" name="psedonimn"><br>
    <input type="file" name="profilawen" value="profilawen" accept="image/*">
    <input type="submit">
</form>
</HTML>

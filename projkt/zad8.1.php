<?php
//date_default_timezone_set('GMT');
//$data=date_default_timezone_get();
session_start();
?>
<HTML>
<title>Forum internetowe</title>
<BODY>
<form action="zad8.2.php" method="post">
    Jęśli nie masz i nie masz u nas konta i nie chcesz mieć to wypełnij te dane:<br>
Temat:    <input type="text" name="temat"><br>
Wpis:    <input type="text" name="wpis"><br>
Data: <?php  echo date('Y-m-d H:i:s');
    ?><br>
Psełdonim:<input type="text" name="psełdonim">
    Witamy na forum internetowym.<br>
    Jeśli masz u nas konto to podaj e-mail oraz hasło.<br>
E-mail:    <input type="email" name="e-mail"><br>
Hasło:    <input type="password" name="hasło"><br>
    Jeśli chcesz założyć u nas konto to podaj te dane:<br>
E-mail:    <input type="e-mail" name="e-mailn"><br>
Hasło:    <input type="password" name="hasłon"><br>
Psełdonim:    <input type="text" name="psedonimn"><br>
    <input type="file" name="profilawen" value="profilawen">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['profilawen']) && $_FILES['profilawen']['error'] === UPLOAD_ERR_OK) {
            $plik = fopen('index.html', 'a');
            $zawartosc = file_get_contents($_FILES['profilawen']['tmp_name']);
            fwrite($plik, $zawartosc);
            fclose($plik);
            echo 'Plik został zapisany.';
        } else {
            echo 'Wystąpił błąd podczas przesyłania pliku.';
        }
    }
    ?>
    <input type="submit">
</form>
</BODY>
</HTML>
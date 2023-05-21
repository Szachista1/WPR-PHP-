
<?php
session_start();
if (isset($_POST['e-mail']) && isset($_POST['hasło'])){
}
?>

<html>
<form method="post" action="zad8.3.php" onsubmit="return przekierujNaNowaStrone()">
Wpis:    <input type="text" name="wpis">
Temat:    <input type="text" name="temat">
    <input type="submit" value="Wyślij" name="dział">
</form>

<script>
    function przekierujNaNowaStrone() {
        // Przekierowanie na nową stronę
        window.location.href = "zad8.3.php";
        return true; // Jeśli zwrócisz false, formularz nie zostanie przesłany standardowo
    }
</script>
</html>
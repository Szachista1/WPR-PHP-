
<?php
session_start();
if (!empty($_POST['e-mail']) || !empty($_POST['hasło'])){
    if (isset($_POST['e-mail']) || isset($_POST['hasło'])) ?>{
    <html>
<form method="post" action="zad8.3.php">
        Wpis:    <input type="text" name="wpis">
        Temat:    <input type="text" name="temat">
    <input type="submit" value="Wyślij" name="dział">
</form>
    </html>
<?php
}
   else if (!empty($_POST['wpis']) || !empty($_POST['psełdonim'])) {
       if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['wpis']) && isset($_POST['psełdonim'])) {
           $wpis = $_POST['wpis'];
           $pseudonim = $_POST['psełdonim'];

           // Połączenie z bazą danych
           $mysqli = new mysqli("localhost", "root", "", "projekt");

           // Sprawdzenie połączenia
           if ($mysqli->connect_error) {
               die("Nie udało się połączyć z bazą danych: " . $mysqli->connect_error);
           }

           // Ucieczka znaków dla bezpieczeństwa
           $tresc = $mysqli->real_escape_string($wpis);
           $pseudonim = $mysqli->real_escape_string($pseudonim);

           // Zapytanie INSERT do wstawienia danych do tabeli
           $query = "INSERT INTO komentarz (tresc, pseudonim) VALUES ('$tresc', '$pseudonim')";

           // Wykonanie zapytania
           if ($mysqli->query($query) === TRUE) {
               echo "Dane zostały dodane do bazy danych".$wpis."\t".$pseudonim;
           } else {
               echo "Wystąpił problem podczas dodawania danych do bazy danych: " . $mysqli->error;
           }

           // Zamknięcie połączenia z bazą danych
           $mysqli->close(); } ?>
            <HTML>
            <form method="post" action="zad8.3.php">
            Wpis:<input type="text" name="wpis">
            Psełdonim:<input type="text" name="psełdonim">
            </form>
            </HTML>



<?php
       }
elseif(!empty($_POST['e-mailn'])|| !empty($_POST['psełdonimn']) || !empty($_POST['hasłon'])) {
    if (isset($_POST['e-mailn']) || isset($_POST['psełdonimn']) || isset($_POST['hasłon']) || isset($_POST['profilowen'])) {

        $target_directory = "C:\Users\igwar\WPR-PHP-\projkt\profilowe"; // Zmień na właściwą ścieżkę docelową
        $target_file = $target_directory . basename($_FILES["profilawen"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Sprawdzenie czy plik jest faktycznie przesłany
        if (isset($_FILES["profilawen"])) {
            // Sprawdzenie czy plik już istnieje
            if (file_exists($target_file)) {
                echo "Przepraszamy, plik o tej nazwie już istnieje.";
                $uploadOk = 0;
            }
            // Sprawdzenie rozmiaru pliku (opcjonalne)
            if ($_FILES["profilawen"]["size"] > 500000) { // Zmień na odpowiedni limit rozmiaru
                echo "Przepraszamy, twój plik jest zbyt duży.";
                $uploadOk = 0;
            }
            // Sprawdzenie typu pliku (opcjonalne)
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") { // Zmień na odpowiednie rozszerzenia plików
                echo "Przepraszamy, akceptujemy tylko pliki JPG, JPEG, PNG i GIF.";
                $uploadOk = 0;
            }
            // Jeżeli nie ma żadnych błędów, przenieś plik do docelowej ścieżki
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["profilawen"]["tmp_name"], $target_file)) {
                    echo "Plik został pomyślnie przesłany i zapisany w: " . $target_file;
                } else {
                    echo "Wystąpił problem podczas przesyłania pliku.";
                }
            }
        }
    }
} ?>

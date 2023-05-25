
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

<?php
}
elseif (isset($_POST['temat']) || isset($_POST['wpis']) || isset($_POST['psełdonim'])) {
    $data =date('Y-m-d H:i:s');
    echo $_POST['temat']." ".$_POST['wpis']." ".$_POST['psełdonim']." ".$data;
}
if(isset($_POST['e-mailn']) || isset($_POST['psełdonimn']) || isset($_POST['hasłon']) || isset($_POST['profilowen'])){

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
?></html>

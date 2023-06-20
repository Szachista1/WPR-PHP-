<?php
session_start();
if (isset($_POST['temat']) && isset($_POST['wpis'])) {
    $temat = $_POST['temat'];
    $wpis = $_POST['wpis'];
    $login = $_SESSION['login'];
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "projekt1";
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $idUzytkownika = 0;
    $userQuery = "SELECT id FROM uzytkownik WHERE login = ?";
    $stmt = $conn->prepare($userQuery);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $userResult = $stmt->get_result();
    if ($userResult && $userResult->num_rows > 0) {
        $userData = $userResult->fetch_assoc();
        $idUzytkownika = $userData['id'];
    } else {
        // Dodaj nowego użytkownika do tabeli "uzytkownik"
        $insertUserQuery = "INSERT INTO uzytkownik (login) VALUES (?)";
        $stmt = $conn->prepare($insertUserQuery);
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $idUzytkownika = $stmt->insert_id;
    }

    $insertQuery = "INSERT INTO temat (tytul, tresc, idUzytkownika) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ssi", $temat, $wpis, $idUzytkownika);
    if ($stmt->execute()) {
        $_SESSION['temat'] = $temat;
        $_SESSION['wpis'] = $wpis;
        echo $_SESSION['temat'] . "<br>";
        echo $_SESSION['wpis'] . "<br>";
    }

    echo $_SESSION['login'];
    $conn->close();
}
?>
<html>
<a href="komentarz.php">komentarz</a>
<form action="" method="post">
    temat <input type="text" name="temat"><br>
    <input type="text" name="wpis"><br>
    <input type="submit">
</form>
</html>

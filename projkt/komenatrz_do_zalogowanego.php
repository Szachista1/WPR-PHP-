<?php
session_start();

if (isset($_POST['psedonim1']) && isset($_POST['tresc'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "projekt1";
    $psełonim1 = $_POST['psełdonim1'];
    $tresc = $_POST['tresc'];
    $conn = new mysqli($servername, $username, $password, $database);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $idUzytkownika = 0;

    // Check if the user exists in the "uzytkownik" table
    $userQuery = "SELECT id FROM uzytkownik WHERE login = ?";
    $stmt = $conn->prepare($userQuery);
    $stmt->bind_param("s", $psełonim1);
    $stmt->execute();
    $userResult = $stmt->get_result();

    if ($userResult && $userResult->num_rows > 0) {
        $userData = $userResult->fetch_assoc();
        $idUzytkownika = $userData['id'];
    } else {
        // Add a new user to the "uzytkownik" table
        $insertUserQuery = "INSERT INTO uzytkownik (login) VALUES (?)";
        $stmt = $conn->prepare($insertUserQuery);
        $stmt->bind_param("s", $psełonim1);
        $stmt->execute();
        $idUzytkownika = $stmt->insert_id;
    }

    $idTematu = 0;
    $tematQuery = "SELECT id FROM temat WHERE tytul = ?";
    $stmt = $conn->prepare($tematQuery);
    $stmt->bind_param("s", $tresc);
    $stmt->execute();
    $tematResult = $stmt->get_result();

    if ($tematResult && $tematResult->num_rows > 0) {
        $tematData = $tematResult->fetch_assoc();
        $idTematu = $tematData['id'];
    } else {
        // Add a new topic to the "temat" table
        $insertTematQuery = "INSERT INTO temat (tytul) VALUES (?)";
        $stmt = $conn->prepare($insertTematQuery);
        $stmt->bind_param("s", $tresc);
        $stmt->execute();
        $idTematu = $stmt->insert_id;
    }

    $now = new DateTime();
    $nowFormatted = $now->format('Y-m-d H:i:s');

    // Insert the comment into the "komentarz" table
    $insertQuery = "INSERT INTO komentarz (tresc, data, pseudonim, idUzytkownika, idTematu) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sssii", $tresc, $nowFormatted, $psełonim1, $idUzytkownika, $idTematu);

    if ($stmt->execute()) {
        $_SESSION['tresc'] = $_POST['tresc'];
        $_SESSION['psedonim1'] = $_POST['psedonim1'];
        $now = new DateTime();
        $nowFormatted = $now->format('Y-m-d H:i:s');
        echo "Wpis"."<br>".$_SESSION['temat']."<br>".$_SESSION['psełdonim']."<br>".$_SESSION['wpis']."<br>"."komentarz"."<br>".$_SESSION['temat']."<br>".$nowFormatted."<br>".$_SESSION['tresc']."<br>".$_SESSION['psedonim1']."<br>";
    }
}


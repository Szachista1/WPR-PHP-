<?php
session_start();

if (isset($_POST['psełdonim']) && isset($_POST['temat']) && isset($_POST['wpis'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "projekt1";
    $psełonim = $_POST['psełdonim'];
    $temat = $_POST['temat'];
    $wpis = $_POST['wpis'];

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $database);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $idUzytkownika = 0;

    // Check if the user exists in the "uzytkownik" table
    $userQuery = "SELECT id FROM uzytkownik WHERE login = ?";
    $stmt = $conn->prepare($userQuery);
    $stmt->bind_param("s", $psełonim);
    $stmt->execute();
    $userResult = $stmt->get_result();

    if ($userResult && $userResult->num_rows > 0) {
        $userData = $userResult->fetch_assoc();
        $idUzytkownika = $userData['id'];
    } else {
        // Add a new user to the "uzytkownik" table
        $insertUserQuery = "INSERT INTO uzytkownik (login) VALUES (?)";
        $stmt = $conn->prepare($insertUserQuery);
        $stmt->bind_param("s", $psełonim);
        $stmt->execute();
        $idUzytkownika = $stmt->insert_id;
    }

    $now = new DateTime();
    $nowFormatted = $now->format('Y-m-d H:i:s');

    // Insert the topic into the "temat" table
    $insertQuery = "INSERT INTO temat (tytul, tresc, idUzytkownika, datapublikacji) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("ssis", $temat, $wpis, $idUzytkownika, $nowFormatted);

    if ($stmt->execute()) {
        $_SESSION['temat'] = $_POST['temat'];
        $_SESSION['psełdonim'] = $_POST['psełdonim'];
        $_SESSION['wpis'] = $_POST['wpis'];
        echo $_SESSION['psełdonim'] . "<br>" . $_SESSION['temat'] . "<br>" . $_SESSION['wpis'];
        $now = new DateTime();
        echo $now->format('Y-m-d H:i:s');
    }
}
?>

<HTML>
<form action="" method="post">
    komentarz: <input type="text" name="tesc"><br>
    <input type="submit">
</form>
</HTML>

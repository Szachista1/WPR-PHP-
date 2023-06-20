<?php

session_start();

// Check if the form is submitted
if (isset($_POST['login']) && isset($_POST['hasło'])) {
    // Database connection configuration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "projekt1";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $database);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement to retrieve the record based on the email
    $login = $_POST['login'];
    $sql = "SELECT * FROM uzytkownik WHERE login = '$login'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if a matching record was found
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Compare the entered password with the password from the database
        if (!($_POST['hasło']) == $row['hasło']) {
            $_SESSION['login'] = $login;
            // Redirect to the interface page
            header("Location: przejscie_do_interfejsu.php");
            exit();
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "Nie ma takiego użytkownika lub źle wpisano dane";
    }

    // Close the database connection
    $conn->close();

}
$_SESSION['login'] = $_SESSION['login'];

?>

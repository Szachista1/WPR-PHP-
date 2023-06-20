<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $email = $_POST['e-mailn'];
    $password = $_POST['hasłon'];
    $pseudonym = $_POST['psedonimn'];
    $email= $_POST['e-mailn'];

    // Validate and sanitize the data (you should implement proper validation)

    // Connect to the database (replace with your own credentials)
    $host = "localhost";
    $username = "root";
    $password1 = "";
    $database = "projekt1";

    $conn = new mysqli($host, $username, $password1, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the SQL query to insert the data into the table
    $sql = "INSERT INTO uzytkownik (login, haslo,email) VALUES ('$pseudonym', '$password', '$email')";
    if ($conn->query($sql) === TRUE) {
        $lastInsertedId = $conn->insert_id;
        $targetDir = "C:/Users/igwar/WPR-PHP-/projkt/";
        $targetFile = $targetDir . basename($_FILES["profilawen"]["name"]);

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($_FILES["profilawen"]["tmp_name"], $targetFile)) {
            // File upload successful
            echo "File uploaded successfully.";
        } else {
            // File upload failed
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
$_SESSION['psedonim']=$_POST['psedonimn'];
}

?>

<HTML>
<form action="wpis.php" method="post" enctype="multipart/form-data">
    Wpis:<input type="text" name="wpis"><br>
    Temat:<input type="text" name="temat">
    <input type="submit">
</form>
</HTML>



<?php
session_start();

if(isset($_POST['submit'])) {
    // połączenie z bazą danych
    $db = mysqli_connect('localhost', 'nazwa_uzytkownika', 'haslo', 'nazwa_bazy_danych');

    // pobranie danych z formularza logowania
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // zapytanie do bazy danych w celu weryfikacji użytkownika i hasła
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result) == 1) {
        // jeśli użytkownik istnieje w bazie danych, zaloguj i przekieruj na stronę główną
        $_SESSION['username'] = $username;
        header('location: index.php');
    } else {
        // jeśli użytkownik nie istnieje w bazie danych, wyświetl komunikat o błędzie
        $error = "Nieprawidłowe dane logowania";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Strona logowania</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-page">
    <div class="form">
        <form class="login-form" action="login.php" method="post">
            <input type="text" name="username" placeholder="Nazwa użytkownika"/>
            <input type="password" name="password" placeholder="Hasło"/>
            <button type="submit">Zaloguj</button>
        </form>
    </div>
</div>
</body>
</html>








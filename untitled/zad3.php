<?php
session_start();
setcookie('student','s26986',time()-36000);
print_r($_COOKIE);
if(isset($_GET['submit'])){
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'defekty';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die('Could not Connect MySql Server:');
    }
    $imię = $_GET['imie'];
    $email = $_GET['email'];
    $nazwisko = $_GET['nazwisko'];
    $błąd=$_GET['błąd'];
    $sql = "INSERT INTO zgloszenia (imię,nazwisko,adress_email,defekt)
     VALUES ('$imię','$nazwisko','$email','$błąd')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
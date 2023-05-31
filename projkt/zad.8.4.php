<?php
session_start(); // Starts a session
echo "Tematy";
if(isset($_POST['d1'])){ // Checks if the 'd1' POST parameter is set
    echo $_SESSION['temat']; // Retrieves the value of 'temat' and echoes it
}
?>

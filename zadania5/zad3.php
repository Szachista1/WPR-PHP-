<?php

setcookie("mycookie", time(), time()+3600);
if(isset($_COOKIE["mycookie"])) {
    echo "Wartość ciasteczka to: ".$_COOKIE["mycookie"];
} else {
    echo "Ciasteczko nie istnieje.";
}
?>


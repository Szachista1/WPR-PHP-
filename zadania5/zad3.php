<?php
$dni=365;

if(!isSet($_COOKIE['hits'])){
    $hits=1;}
else
{$hits= intval($_COOKIE['hits']);
    $hits++;
}
setCookie("hits","$hits",time()+60*60*24*$dni);
echo("Ta strona została odwiedzona $hits razy.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=iso-8859-2">
    <meta name="Description" content=" [wstaw tu opis strony] ">
    <meta name="Keywords" content=" [wstaw tu slowa kluczowe] ">
    <meta name="Author" content=" [dane autora] ">
    <meta name="Generator" content="kED2">

    <title> [tytuł strony] </title>

    <link rel="stylesheet" href=" [nazwa_arkusza_stylow.css] " type="text/css">
</head>

</html>
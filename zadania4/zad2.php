<?php
define('LICZNIK', 'licznik.txt');

//sprawdzamy czy plik istnieje
if(file_exists(LICZNIK))
{
    //otwieramy plik
    $f = fopen(LICZNIK, "r");
    //blokujemy dostęp do pliku
    flock($f, 1);
    //odczytujemy wartość licznika
    $wartosc = fgets($f, 100);
    //odblokowyjemy plik
    flock($f, 3);
    //zamykamy plik
    fclose($f);
    //zwiększmy wartość licznika
    $wartosc++;
}
else
{
    //jeśli plik nie istnieje ustawiamy wartość domyślną 1
    $wartosc = 1;
}
//otwieramy plik w trybie do zapisu
$f = fopen(LICZNIK, "w");
//blokujemy możliwość zapisu do pliku
flock($f, 2);
//zapisujemy wartość licznika do pliku
fwrite($f, $wartosc);
//odblokowujemy plik
flock($f, 3);
//zamykamy plik
fclose($f);
//wyświetlamy wartość licznika
echo $wartosc;
?>

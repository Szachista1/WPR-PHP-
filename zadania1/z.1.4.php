<?php
$pesel=191203526;
function urodziny($pesel)
{
    global $pesel;
    $rok=substr($pesel,0,2);
    $dzien=substr($pesel,4,2);
    $miesiac=substr($pesel,2,2);
    return $dzien . "-" . $miesiac ."-" . $rok;
}
echo urodziny($pesel);


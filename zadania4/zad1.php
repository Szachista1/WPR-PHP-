<?php
if(isset($_POST["zatwierdz"]))
{
    if(isset($_FILES["plik"]))
    {
        $fileDescriptor = fopen($_FILES["plik"]["tmp_name"], "r");
       // var_dump($_FILES);
        $tablica = array();
        while(!feof($fileDescriptor)) {
            $tablica[] = fgets($fileDescriptor);
        }
        fclose($fileDescriptor);
        $odwrocona_tablica = array_reverse($tablica);
        foreach($odwrocona_tablica as $linia) {
            echo $linia;
        }

    }
}
?>
<form name="formularz" method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
    <input type="file" name="plik">
    <input type="submit" name="zatwierdz" value="Wyślij plik">

</form>

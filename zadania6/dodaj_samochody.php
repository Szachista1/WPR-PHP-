<HTML>
<FORM name="form" action="dodaj_samochody.php" method="post">
Dodaj samochód <BR>
marka: <input type="text", name="marka", maxlength="40"> <BR>
model: <input type="text", name="model", maxlength="40"> <BR>
rok: <input type="text", name="rok", maxlength="4"><BR>
opis: <input type="text", name="opis", maxlength="400"><BR>
cena: <input type="text", name="cena"><BR>
<input type="submit", value="wyślij">
    <?php

    if ($_SERVER['REQUEST_METHOD']=='POST') {
    if(isset($_POST['marka']) && isset($_POST['model']) && isset($_POST['rok']) && isset($_POST['opis']) && isset($_POST['cena'])) {
    if(!empty($_POST['marka']) && !empty($_POST['model']) && !empty($_POST['marka']) && is_numeric($_POST['rok']) && !empty($_POST['opis']) && is_numeric($_POST['cena'])) {
    if (!$x=mysqli_connect("localhost", "root" , "", "mojaBaza" ) )   {
    echo "Nie udało się zrbić";
    exit();}
    $query="INSERT INTO samochody  (marka, model, rok, opis, cena) ";
$query.="VALUES ('{$_POST['marka']}', '{$_POST['model']}', {$_POST['rok']}, '{$_POST['opis']}', {$_POST['cena']})";
$rezultat=mysqli_query($x, $query);
if (mysqli_affected_rows($x)==1) {
    echo "został dodany";
}
if (!mysqli_close($x)){
    echo "jest prblem";
    exit();
}
    }
    }   }
    ?>
</FORM>
</HTML>

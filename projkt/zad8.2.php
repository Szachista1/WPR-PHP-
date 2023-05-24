
<?php
session_start();
if (!empty($_POST['e-mail']) || !empty($_POST['hasło'])){
    if (isset($_POST['e-mail']) || isset($_POST['hasło'])) ?>{
    <html>
<form method="post" action="zad8.3.php">
        Wpis:    <input type="text" name="wpis">
        Temat:    <input type="text" name="temat">
    <input type="submit" value="Wyślij" name="dział">
</form>

<?php
}
elseif (isset($_POST['temat']) || isset($_POST['wpis']) || isset($_POST['psełdonim'])) {
    $data =date('Y-m-d H:i:s');
    echo $_POST['temat']." ".$_POST['wpis']." ".$_POST['psełdonim']." ".$data;
}
if(isset($_POST['e-mailn']) || isset($_POST['psełdonimn']) || isset($_POST['hasłon']) || isset($_POST['profilowen'])){
    echo $_POST['e-mailn'];
}
?></html>

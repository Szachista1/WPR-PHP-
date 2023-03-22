<?php
if(isset($_POST['liczba1']) && isset($_POST['liczba2']))
if(is_numeric($_POST['liczba2']) && is_numeric($_POST['liczba1']))

switch ($_POST['mul']){
    case 'mnożenie': echo $_POST['liczba1']*$_POST['liczba2']; break;
    case 'dzielenie': echo $_POST['liczba1']/$_POST['liczba2']; break;
    case 'odejmowanie': echo $_POST['liczba1']-$_POST['liczba2']; break;
    case 'dodawanie': echo $_POST['liczba1']+$_POST['liczba2']; break;
}
?>
<HTML>
<FORM name="dwa" action="z.2.2.2.php" method="POST">
    <tr>
        <td><input name="liczba1"><select name="mul">
                <option>mnożenie</option>
                <option>dodawanie</option>
                <option>odejmowanie</option>
                <option>dzielenie</option></select><input name="liczba2"> </td>
    </tr>
    <tr>
        <input type="submit" value="Obliczone">
    </tr>
</HTML>
<?php
if(isset($_POST['liczba1']) && isset($_POST['liczba2'])) {
    if(is_numeric($_POST['liczba2']) && is_numeric($_POST['liczba1'])) {
        switch ($_POST['mul']) {
            case 'mnożenie':
                echo $_POST['liczba1']*$_POST['liczba2'];
                break;
            case 'dzielenie':
                echo $_POST['liczba1']/$_POST['liczba2'];
                break;
            case 'odejmowanie':
                echo $_POST['liczba1']-$_POST['liczba2'];
                break;
            case 'dodawanie':
                echo $_POST['liczba1']+$_POST['liczba2'];
                break;
        }
    }
}
    if (isset($_POST['liczba']))
        if (is_numeric($_POST['liczba']))
            // inne przypadki przeliczeń jednostek
            if ($_POST['lol'] == 'Stopnie_na_radiany') {
                echo $_POST['liczba'] * pi() / 180;
            }
            elseif ($_POST['lol'] =='Radiany_na_stopnie'){
                echo $_POST['liczba']*180/pi();
            }
?>
<HTML>
<table>
    <FORM name="dwa" action="z.2.2.2.php" method="POST">
        <tr>
            <td>
                <input name="liczba1">
                <select name="mul">
                    <option>mnożenie</option>
                    <option>dodawanie</option>
                    <option>odejmowanie</option>
                    <option>dzielenie</option>
                </select>
                <input name="liczba2">
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Obliczone"></td>
        </tr>
        <tr>
            <td>
                <input name="liczba">
                <select name="lol">
                    <option>Cosinus</option>
                    <option>Sinus</option>
                    <option>Tangens</option>
                    <option>Binarne_na_dziesiętne</option>
                    <option>Dziesiętne_na_binarne</option>
                    <option>Dziesiętne_na_szesnastkowe</option>
                    <option>Szesnastkowe_na_dziesiętne</option>
                    <option>Stopnie_na_radiany </option>
                    <option>Radiany_na_stopnie</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Oblicz"></td>
        </tr>
    </FORM>
</table>
</HTML>

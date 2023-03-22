<?php

?>
<html>
<FORM name="jeden" action="z1.2.2.php" method="POST">
    <table>
        <TR>
            <TD>Imię i nazwisko*</TD>
            <td><input name="Imię i nazwisko*" required></td>
            </tr>
        <tr>
            <td>e-mail*</td>
            <td><input type="email" required></td>
            </tr>
        <tr>
            <td>Telefon kontaktowy*</td>
            <td><input name="telefon kontaktowy*"></td>
            </tr>
        <tr>
            <td>Wybierz temat</td>
            <td><select name="Wykonanie strony internetowej" required>
                    <option>Wykonanie strony internetowej</option><option>gra</option></select></td>
            </tr>
        <tr>
            <td>Treść wiadomości*</td>
            <td><textarea id="as" name="as" rows="4" cols="50" required>Wpisz tutaj treść swojej wiadomości...</textarea></td>
        </tr>


        <tr>
            <td>Preferowana forma kontaktu</td>
            <tr><td><input type=checkbox name="e-mail">e-mail</td>
        </tr>
        <tr>
            <td><input type=checkbox name="telefon">telefon</td>
        </tr>
        <tr>
            <td>Posiadasz już stronę www?</td>
        </tr>
        <tr>
            <td> <input type=radio name="lol">Tak</td>
        </tr>
        <tr>
            <td><input type=radio name="lol">Nie</td>
        </tr>
        <tr>
            <td><input type=file>Wybierz plik</td>
        </tr>
        <tr>
            <td><input type=submit value="Wyślij formularz"></td>
        </tr>
    </table>

</html>

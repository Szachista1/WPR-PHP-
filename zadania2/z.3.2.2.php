<?php
setlocale(LC_TIME, 'pl_PL');
if (isset($_POST['p'])) {
    if (is_numeric($_POST['p'])) {
        $year=substr(($_POST['p']),0,2);
        $day=substr(($_POST['p']),4,2);
        $mounth=substr(($_POST['p']),2,2);
        if ($mounth > 12) {
            $mounth -= 20;
            $year += 2000;
        } else {
            $year += 1900;
        }
;
        $mounth= strftime('%B', mktime(0, 0, 0, $mounth, 1));
       // $day1_birth = date("d-M-Y", strtotime("$day-$mounth-$year"));
        echo "Urodziłeś się ".$day."-".$mounth."-".$year." roku.";

        $male=substr(($_POST['p']),9,1);
        if($male%2==0) echo "Jesteś kobietą";
        else echo "Jesteś męszczyzną";



    }
}
?>
<html>
<tr>
    <FORM name="dwa" action="z.3.2.2.php" method="POST">
    <td>Pesel<input name="p"></td><td><input type="submit" value="Obliczone"></td>
    </FORM>
</tr>


</html>
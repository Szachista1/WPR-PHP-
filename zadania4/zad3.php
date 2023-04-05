<?php
function printLinks()
{
    if(!($fd = fopen("Inforamatyka.txt.txt","r"))){
        return;
    }
    $arr = array();
    while (!feof ($fd)){
        $line = trim(fgets($fd));
        $arr[] = $line;
    }
    fclose($fd);
    sort($arr);
    echo("<UL>\n");
    foreach($arr as $link){
        $link = "<LI><A HREF=\"$link\">$link</A>\n";
        echo($link);
    }
    echo("</UL>\n");
}
printLinks();
?>

<?php
if (!is_dir('lol')) {
    mkdir('lol');
}
$handle = opendir('lol');
while (false !== ($file = readdir($handle))) {
    echo $file;
}
if (!is_dir('lol')) {
    rmdir('lol');
}
?>
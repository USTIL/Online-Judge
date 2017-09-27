<?php
$code = $_POST['code'];
if ($code != "") {
    $myfile = fopen("code.c", "w") or die("Unable to open file!");
    fwrite($myfile, $code);
    fclose($myfile);
    $com = "python check.py";
    passthru($com);
}
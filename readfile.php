<?php
    $myFile = fopen("testfile", "r") or die("Unable to find file");
    echo fread($myFile, filesize("testfile"));
    fclose($myFile);
?>
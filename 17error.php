<?php
if(!file_exists("welcome.txt"))
{
    die("Unable to open file.");
}
else
{
    $file=fopen("welcome.txt","r");
    echo fgets($file);
}
<?php
$file=fopen("text1.txt","r") or exit("Unable to open file");
/*while(!$feof($file))
{
    echo fgets($file)."<br>" ;
}*/
echo fgets($file)."<br>";
fclose($file);


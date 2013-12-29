<?php
/**
while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array
 */

#while loop
$x=1;
while($x<=5)
{
    echo "The number is: $x <br>";
    $x++;
}

#dowhile loop
$y=1;
do
{
    echo "The number is: $y <br>";
    $y++;
}
while ($y<=5);

#for loop
for ($z=0; $z<=10; $z++)
{
    echo "The number is: $z <br>";
}
for ($i=1;$i<10;$i++)
{
   $i=$i+1;
    echo $i;
    echo "<br>";
}

#for-each loop
$colors = array("red","green","blue","yellow");
foreach ($colors as $value)
{
    echo "$value <br>";
}

?>
<?php
$x=10; //global variable
$y=15; //global variable
$sum=0; //global variable
function Test1()
{
    /*global $x,$y,$sum;
    $sum=$x+$y;
    */
    $GLOBALS['sum']=$GLOBALS['x']+$GLOBALS['y'];
}
Test1();
echo 'Sum of global variables($x & $y) is: '.$sum;

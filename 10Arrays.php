<?php
#Array stores multiple values in single variable
/**
 * Different types of array
 * 1)Indexed array
 * 2)Associative array
 * 3)Multidimensional array
 *
 * --echo count($arrayname); -- this counts the length of the array.
 */

#indexed array
$bikes=array("Yamaha","Pulsar","Honda","Suzuki");
//$bikes[0]="Yamaha";
//$bikes[1]="Pulsar";
//$bikes[2]="Honda";
//$bikes[3]="Suzuki";
//echo "I like ".$bikes[0].",".$bikes[1].",".$bikes[2].",".$bikes[3];
$arrlength=count($bikes);
for ($x=0;$x<$arrlength;$x++) #printing using for loop
{
    echo $bikes[$x];
    echo "<br>";
}

#associative array -- it used the named keys that we assigned.
$age=array("Ashwin"=>"20","Ram"=>"25","Subas"=>"30");
#$age['Ashwin']="20";
#$age['Ram']="25";
#$age['Subas']="30";
foreach($age as $x=>$value)
{
    echo $x."'s age: ".$value;
    echo "<br>";
}

#multidimensional array
$family=array("Ashwin"=>array("Dimpu","Ashwin","Sonu"),"Rejesh"=>array("rejoy","rejesh","Jayant"));
echo "in ashwin family, S for ".$family['Ashwin'][2];




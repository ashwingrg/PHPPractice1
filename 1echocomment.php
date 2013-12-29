<?php
//echo can output one or more strings
//print can only output one string, and returns always 1

echo "Hello world, this is first program<br>";
//php is loosely type language
ECHO "Hello world, printed from ECHO command<br>";
//declaring variable
$color="red";
echo "I have $color eye";
echo "<h3>I have $color eye</h3><br>";
echo 'I have'.$color.'eye<br>';

//this is single line comment.
#this is also single line comment.
/*this is
multi line
comment
*/

/*
 * PHP VARIABLES SCOPE
 * 1) LOCAL
 *  -- A variable declared within a function has a local scope,can only be accessed within that function.
 * 2) GLOBAL
 *  -- A variable declared outside a function has a global scope, can only be accessed outside a function.
 *
 * 3) STATIC
 */

?>
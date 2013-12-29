<?php
/**
 * In PHP we have the following conditional statements:

if statement - executes some code only if a specified condition is true
if...else statement - executes some code if a condition is true and another code if the condition is false
if...elseif....else statement - selects one of several blocks of code to be executed
switch statement - selects one of many blocks of code to be executed
 */

$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
elseif ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
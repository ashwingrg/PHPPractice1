<?php
function Name() //declaring user-defined function
{
    echo "My name is Ashwin Gurung <br>";
}
Name(); //calling function

#function with arguments
function Name2($fname,$mname,$lname)
{
    echo "Your name is ".$fname." ".$mname." ".$lname."<br>";
}
Name2("Ashwin","Bahadur","Gurung");
Name2("Ram","Bahadur","Kunwar");

#function with return value
function Calc($val1,$val2)
{
    $sum=$val1+$val2;
    return $sum;
}
echo "sum is ". Calc(15,5);

function calc2()
{
    $result=5*5;
    return $result;
}
echo "Multiplication of 5 and 5 is ".calc2();

#generate random number in range of 1-5
$num=rand(1,5);
echo $num;
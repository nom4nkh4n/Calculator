<?php

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$operation=$_POST["operations"];

if($operation=="Add")
{
$answer_add = $num1 + $num2;
echo $num1."+".$num2."=";
echo $answer_add;
}

if($operation=="Substract")
{
$answer_substract = $num1 - $num2;
echo $num1."-".$num2."=";
echo $answer_substract;
}


if($operation=="Divide")
{
$answer_divide = $num1 / $num2;
echo $num1."/".$num2."=";
echo $answer_divide;
}


if($operation=="Multiply")
{
$answer_multiply = $num1 * $num2;
echo $num1."*".$num2."=";
echo $answer_multiply;
}

?>
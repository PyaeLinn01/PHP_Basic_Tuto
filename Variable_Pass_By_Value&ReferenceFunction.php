<?php

$age = 20; //Global Variable
function func(&$age)   // & => make the global variable change
{
    $age = 5;
    echo $age;

}
func($age);
echo "\n";
echo $age;



?>



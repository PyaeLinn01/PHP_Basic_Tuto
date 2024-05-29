<?php

$var = 20; //Global Variable
function func()
{

    global $var; //You must call with global keyword when you want to call the variable, which is not within the Function!
    $var = 5; //local variable
    echo $var;
}
func();
?>



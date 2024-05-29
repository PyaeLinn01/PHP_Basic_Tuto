<?php

function func()
{
    static $var = 0;
    $var++;
    echo $var."\n";
}
func();
func();
func();


?>



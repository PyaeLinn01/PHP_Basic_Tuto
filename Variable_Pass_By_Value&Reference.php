<?php

$a = 20;
//$b = $a;
$b = &$a;  //& => Once a value changes, b value also changes.

$a = 40;

echo "a now is " . $a . "<br>";
echo "b now is " . $b . "<br>";

?>



<?php

function bubu()
{
    echo "hello";
}
$var = "bubuw";
$bol = function_exists($var); //check for Function exist or not

if($bol){
    echo "Function Exist";
}else{
    echo "Function Not Exist";
}

?>



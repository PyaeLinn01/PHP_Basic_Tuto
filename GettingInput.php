<?php

if(isset($_GET['submit'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = $num1 + $num2;
    echo "<h1>Sum: $sum</h1>";
}

?>

<form action="" method="get">
    First Number: <input type="number" name="num1">
    Second Number: <input type="number" name="num2">

    <button type="submit" name="submit">To Sum</button>

</form>


<?php
if(isset($_POST["submit"])){
    $color = $_POST["myRadio"];
    $style = '';
    switch($color) {
        case 'Red':
            $style = 'color: red;';
            break;
        case 'Blue':
            $style = 'color: blue;';
            break;
        case 'Green':
            $style = 'color: green;';
            break;
        case 'Navy Blue':
            $style = 'color: navy;';
            break;
        case 'Rainbow':
            $style = 'background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet); -webkit-background-clip: text; color: transparent;';
            break;
    }
    echo "You chose <span style='$style'>$color</span><br>";

}




?>
<form action="" method="post">
    <input type="radio" name="myRadio" value="Red">Red <br><br>
    <input type="radio" name="myRadio" value="Blue">Blue <br><br>
    <input type="radio" name="myRadio" value="Green">Green <br><br>
    <input type="radio" name="myRadio" value="Navy Blue">Navy Blue <br><br>
    <input type="radio" name="myRadio" value="Rainbow">Rainbow <br><br>
    <button type="submit" name="submit">Choose</button>
</form>

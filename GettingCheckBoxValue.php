<?php
if(isset($_POST["submit"])){
    $colors = $_POST["color"];

    foreach ($colors as $color) {
        // Determine the CSS style for each color
        $style = '';
        switch($color) {
            case 'red':
                $style = 'color: red;';
                break;
            case 'blue':
                $style = 'color: blue;';
                break;
            case 'green':
                $style = 'color: green;';
                break;
            case 'Navy Blue':
                $style = 'color: navy;';
                break;
            case 'Rainbow':
                $style = 'background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet); -webkit-background-clip: text; color: transparent;';
                break;
        }
        echo "<span style='$style'>$color</span><br>";
    }
}
?>

<form action="" method="post">
    <input type="checkbox" name="color[]" value="red"> Red <br><br>
    <input type="checkbox" name="color[]" value="blue"> Blue <br><br>
    <input type="checkbox" name="color[]" value="green"> Green <br><br>
    <input type="checkbox" name="color[]" value="Navy Blue"> Navy Blue <br><br>
    <input type="checkbox" name="color[]" value="Rainbow"> Rainbow <br><br>
    <button type="submit" name="submit" value="Choose">Choose</button>
</form>

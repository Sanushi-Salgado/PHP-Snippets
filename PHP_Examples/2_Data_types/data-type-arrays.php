<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Arrays</title>
</head>
<body>

<?php
$colors = array("Red", "Green", "Blue");
var_dump($colors);
echo "<br>";
 
$color_codes = array(
    "Red" => "#ff0000",
    "Green" => "#00ff00",
    "Blue" => "#0000ff"
);
var_dump($color_codes);
?>

</body>
</html>

output:

array(3) { [0]=> string(3) "Red" [1]=> string(5) "Green" [2]=> string(4) "Blue" } 
array(3) { ["Red"]=> string(7) "#ff0000" ["Green"]=> string(7) "#00ff00" ["Blue"]=> string(7) "#0000ff" }
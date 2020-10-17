<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Array Operators</title>
</head>
<body>

<?php
$x = array("a" => "Red", "b" => "Green", "c" => "Blue");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
$z = $x + $y; // Union of $x and $y
var_dump($z);
echo "<hr>";

var_dump($x == $y);
echo "<br>";

var_dump($x === $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x <> $y);
echo "<br>";

var_dump($x !== $y);
?>

</body>
</html>

output:
array(6) { ["a"]=> string(3) "Red" ["b"]=> string(5) "Green" ["c"]=> string(4) "Blue" ["u"]=> string(6) "Yellow" ["v"]=> string(6) "Orange" ["w"]=> string(4) "Pink" }
____________________________________________________________

bool(false) 
bool(false) 
bool(true) 
bool(true) 
bool(true)
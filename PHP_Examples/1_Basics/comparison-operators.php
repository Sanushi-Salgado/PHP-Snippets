<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Comparison Operators</title>
</head>
<body>

<?php
$x = 25;
$y = 35;
$z = "25";

var_dump($x == $z);
echo "<br>";

var_dump($x === $z);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x !== $z);
echo "<br>";

var_dump($x < $y);
echo "<br>";

var_dump($x > $y);
echo "<br>";

var_dump($x <= $y);
echo "<br>";

var_dump($x >= $y);
?>

</body>
</html>

output:
bool(true) 
bool(false) 
bool(true) 
bool(true) 
bool(true) 
bool(false) 
bool(true) 
bool(false)
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Arithmetic Operators</title>
</head>
<body>

<?php
$x = 10;
$y = 4;

echo($x + $y);
echo "<br>";

echo($x - $y);
echo "<br>";

echo($x * $y);
echo "<br>";

echo($x / $y);
echo "<br>";

echo($x % $y);
?>

</body>
</html>


output:
14
6
40
2.5
2











$i = 6;

$i **=2; //output 36

$out = $i ** 3 //output 216

echo 2 ** 3 ** 2; // 512 (not 64)
echo -3 ** 2; // -9 (not 9)
echo 1 - 3 ** 2; // -8
echo ~3 ** 2; // -10 (not 16)
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Integers</title>
</head>
<body>

<?php
$a = 123; // decimal number
var_dump($a);
echo "<br>";
 
$b = -123; // a negative number
var_dump($b);
echo "<br>";
 
$c = 0x1A; // hexadecimal number
var_dump($c);
echo "<br>";
 
$d = 0123; // octal number
var_dump($d);
echo "<br>";

$e = 10.5; // decimal number
var_dump($e);
echo "<br>";

$f = 3454545344545; // hexadecimal number
var_dump($f);
echo "<br>";

$g = "Spot"; // string
var_dump($g);
echo "<br>";

$h = false; // boolean
var_dump($h);
echo "<br>";
?>

</body>
</html>


 
Output:
int(123) 
int(-123) 
int(26) 
int(83) 
float(10.5) 
float(3454545344545) 
string(4) "Spot" 
string(6) "Spotsi" 
bool(false) 
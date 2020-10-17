<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Floats</title>
</head>
<body>

<?php
$a = 1.234;
var_dump($a);
echo "<br>";
 
$b = 10.2e3;
var_dump($b);
echo "<br>";
 
$c = 4E-10;
var_dump($c);

$d = 4e-3;
var_dump($d);

?>

</body>
</html>



Output:
float(1.234) 
float(10200) 
float(4.0E-10) 
float(0.004)
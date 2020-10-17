<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Incrementing and Decrementing Operators</title>
</head>
<body>

<?php
$x = 10;
echo ++$x;
echo "<br>";
echo $x;
echo "<hr>";

$x = 10;
echo $x++;
echo "<br>";
echo $x;
echo "<hr>";

$x = 10;
echo --$x;
echo "<br>";
echo $x;
echo "<hr>";

$x = 10;
echo $x--;
echo "<br>";
echo $x;
?>

</body>
</html>

output:
11
11
__________________________
10
11
__________________________
9
9
__________________________
10
9
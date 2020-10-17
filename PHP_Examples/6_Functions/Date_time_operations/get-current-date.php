<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Get Current Date</title>
</head>
<body>

<?php
// Return current date from the remote server
$today = date("d/m/Y");
echo $today;
echo "<br>";

$today = date("d/m/y");
echo $today;
echo "<br>";

$today = date("d");
echo $today;
echo "<br>";

$today = date("m");
echo $today;
echo "<br>";

$today = date("mm");
echo $today;
echo "<br>";

$today = date("y");
echo $today;
echo "<br>";

$today = date("Y");
echo $today;
echo "<br>";

$today = date("YYYY");
echo $today;
echo "<br>";
?>

</body>
</html>

output:
26/12/2018
26/12/18
26
12
1212
18
2018
2018201820182018
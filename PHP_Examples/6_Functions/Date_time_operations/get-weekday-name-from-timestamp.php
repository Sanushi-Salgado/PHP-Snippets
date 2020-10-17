<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Get Weekday Name</title>
</head>
<body>

<?php
// Get weekday name from a particular date
// or $timestamp = mktime(0,0,0,1,4,2014);
// echo date('l', $timestamp);
echo date('l', mktime(0,0,0,1,4,2014));
?>

</body>
</html>

output:
Saturday
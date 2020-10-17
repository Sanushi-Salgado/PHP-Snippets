<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Formatting the Date String</title>
</head>
<body>

<?php
// Return current date from the remote server
echo date("d/m/Y") . "<br>";
echo date("d-m-Y") . "<br>";
echo date("d.m.Y");
echo date("Y/m/d");
echo date("Y.m.d");
echo date("Y-m-d");
?>

</body>
</html>

output:
10/10/2017
10-10-2017
10.10.2017

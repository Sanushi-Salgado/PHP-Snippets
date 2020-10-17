<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Formatting the Time String</title>
</head>
<body>

<?php
// Return current date and time from the remote server
echo date("h:i:s") . "<br>";
echo date("F d, Y h:i:s A") . "<br>";
echo date("h:i a");
?>

</body>
</html>

output:
05:42:14
October 10, 2017 05:42:14 AM
05:42 am
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Convert Timestamp to Human Readable Format</title>
</head>
<body>

<?php
/* Return current date and time 
from the remote server as timestamp 
*/
$timestamp = time();
echo($timestamp);
echo "<br>";

// Converting timestamp to human readable format
echo(date("F d, Y h:i:s", $timestamp));
?>

</body>
</html>

output:
1507612186
October 10, 2017 05:09:46
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Calculate String Length</title>
</head>
<body>

<?php
$my_str = 'I love coding';
 
// Get the length of the string 
echo strlen($my_str);

$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Display replaced string
echo str_replace("facts", "truth", $my_str);

$my_str = 'You can do anything, but not everything.';
 
// Display reversed string
echo strrev($my_str);
?>

</body>
</html>

ouptut:
28
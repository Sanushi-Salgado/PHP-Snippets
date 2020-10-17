<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sorting PHP Indexed Array in Ascending Order</title>
</head>
<body>

<?php
// Define array
$colors = array("Red", "Green", "Blue", "Yellow");
 
// Sorting and printing array
sort($colors);
print_r($colors);
?>

</body>
</html>

outptut:
Array ( [0] => Blue [1] => Green [2] => Red [3] => Yellow )
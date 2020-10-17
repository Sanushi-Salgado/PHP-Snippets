<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sorting PHP Indexed Array in Descending Order</title>
</head>
<body>

<?php
// Define array
$colors = array("Red", "Green", "Blue", "Yellow");
 
// Sorting and printing array
rsort($colors);
print_r($colors);
?>

</body>
</html>

output:
Array ( [0] => Yellow [1] => Red [2] => Green [3] => Blue )
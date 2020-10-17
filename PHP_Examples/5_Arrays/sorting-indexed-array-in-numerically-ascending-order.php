
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sorting PHP Indexed Array in Ascending Order</title>
</head>
<body>

<?php
// Define array
$numbers = array(1, 2, 2.5, 4, 7, 10);
 
// Sorting and printing array
sort($numbers);
print_r($numbers);
?>

</body>
</html>

outptut:
Array ( [0] => 1 [1] => 2 [2] => 2.5 [3] => 4 [4] => 7 [5] => 10 )
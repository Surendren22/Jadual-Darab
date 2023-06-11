<?php
function calculateArea($length, $width) {
  $area = $length * $width;
  return $area;
}

$length = 5;
$width = 10;
$area = calculateArea($length, $width);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Area Calculation</title>
</head>
<body>
  <h1>Area Calculation</h1>
  <p>Length: <?php echo $length; ?></p>
  <p>Width: <?php echo $width; ?></p>
  <p>Area: <?php echo $area; ?></p>
</body>
</html>

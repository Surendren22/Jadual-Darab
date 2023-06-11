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



<?php
$array = array(
  array(
    'Item 1',
    array('Value 1', 'Value 2', 'Value 3', 'Value 4')
  ),
  array(
    'Item 2',
    array('Value 1', 'Value 2')
  )
);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Multidimensional Array</title>
</head>
<body>
  <h1>Multidimensional Array</h1>
  <table>
    <?php foreach ($array as $item) : ?>
      <tr>
        <th><?php echo $item[0]; ?></th>
        <td>
          <ul>
            <?php foreach ($item[1] as $value) : ?>
              <li><?php echo $value; ?></li>
            <?php endforeach; ?>
          </ul>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>

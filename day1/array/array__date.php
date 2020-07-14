<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khai báo mảng trong PHP </title>
</head>

<body>
  <?php
  $color = array('white', 'black', 'green', 'blue');
  // <!-- sử dụng vòng lặ foreach để duyệt qua các phần tử -->
  foreach ($color as $c) {
    echo $c;
  }
  // <!-- sắp xếp mảng theo các phần tử -->
  sort($color);
  // <!-- in các phần tử dưới dạng list  -->
  echo "<ul>";
  foreach ($color as $y) {
    echo "<li> $y </li>";
  }
  echo "</ul>";
  ?>
</body>

</html>
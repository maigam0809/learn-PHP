<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lấy phần tử đầu tiên trong mảng</title>
</head>

<body>
  <?php

  // cách lấy phần tử đầu tiên trong mảng là dùng reset() để lấy phần tử đầu tiên đóa trong mảng nha
  $color = array(1 => 'white', 5 => 'green', 9 => 'red');
  echo reset($color) . "<br>";
  ?>
</body>

</html>
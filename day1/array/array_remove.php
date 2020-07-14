<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xóa phần tử trong mảng trong PHP</title>
</head>

<body>
  <?php
  $x = array(0, 1, 2, 3, 4);
  var_dump($x);// trước khi in ra kiểu dữ liệu 
  // dùng unset để xóa phần tử trong mảng
  unset($x[3]);
  $x = array_values($x);
  echo '<br>';
  var_dump($x);
  ?>
</body>

</html>
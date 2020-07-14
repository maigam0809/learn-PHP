<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xóa bản sao giá trị trong mảng trong PHP</title>
</head>

<body>
  <?php
  $color = array(
    0 => 'red',
    1 => 'blue',
    2 => 'white',
    3 => 'black',
    4 => 'green',
    5 => 'pink',
    6 => 'gray'
  );
  $number = array(
    0 => 100,
    1 => 200,
    2 => 300,
    3 => 400,
    4 => 500,
    5 => 600,
    6 => 700
  );
  // trong đó : 
  // - hàm array_keys :có tác dụng trả về một mảng tuần tự với phần tử là key của mảng ban đầu.
  // - hàm array_flip :có tác dụng chuyển đổi key của mảng thành value và ngược lại.
  $unique = array_keys(array_flip($color));
  $unique = array_keys(array_flip($number));
  print_r($color);
  echo "<br>";
  print_r($number);

  ?>


</body>

</html>
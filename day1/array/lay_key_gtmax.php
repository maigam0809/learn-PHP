<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lấy key trá trị lớn nhất tong mảng liên hợp </title>
</head>
<body>
  <?php
  $a =array(
    'value1' => 1,
    'value2' => 2,
    'value3' => 3,
    'value4' => 4,
    'value5' => 5,
    'value6' => 6,
    'value7' => 7
  );

  reset($a);
  arsort($a);
  $key_max = key($a);
  echo "Key của giá trị lớn nhất của mảng là : ".$key_max."<br>";
  ?>
</body>
</html>
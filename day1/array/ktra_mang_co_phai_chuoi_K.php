<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kiểm tra phần tử có phải chuỗi hay không</title>
</head>

<body>
  <?php
  function kiem_tra_chuoi_trong_mang($arr)
  {
    return array_sum(array_map('is_string', $arr)) == count($arr);
  }
  $arr1 = array('PHP', 'JS', 'Python');
  $arr2 = array('SQL', 200, 'MySQL');
  var_dump(kiem_tra_chuoi_trong_mang($arr1));
  echo "<br>";
  var_dump(kiem_tra_chuoi_trong_mang($arr2));

  ?>
</body>

</html>
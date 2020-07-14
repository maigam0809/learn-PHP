<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Độ dài ngắn nhất/ dài nhất của các phần tử trong mảng</title>
</head>

<body>
  <?php
  $mang_ban_dau = array("xin", "chao", "Mai", "thị", "Gấm");
  $mang_tam = array_map('strlen', $mang_ban_dau);
  // sử dụng hàm max() ,và min() để tìm chuỗi lớn nhất và chuỗi nhỏ nhất.
  echo "Độ dài phần tử lớn nhất ở trong mảng là " . max($mang_tam) . "<br>Độ dài phần tử nhỏ nhất ở trong mảng là " . min($mang_tam) . "<br>";
  ?>
</body>

</html>
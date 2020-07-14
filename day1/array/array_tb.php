<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giá trị trung bình trong Array </title>
</head>

<body>
  <?php
  $mang_so_nguyen = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,  
  68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
  $mang_tam = explode(",", $mang_so_nguyen);
  $tong_gia_tri = 0;
  $do_dai_mang = count($mang_tam);
  foreach ($mang_tam as $gia_tri) {
    $tong_gia_tri += $gia_tri;
  }
  $gia_tri_tb = $tong_gia_tri / $do_dai_mang;
  echo "Giá trị trung bình là :" .$gia_tri_tb . "<br>";

  // in ra 5 số nguyên nhỏ nhất
  echo "Liệt kê 5 số nguyên nhỏ nhất.";
  sort($mang_tam);
  for($i=0 ;$i < 5; $i++){
    echo $mang_tam[$i] .','; 
  }

  // in ra 5 số nguyên lớn nhất
  echo "<br>Liệt kê 5 số nguyên lớn nhất.";
  rsort($mang_tam);
  for($i=0 ;$i < 5; $i++){
    echo $mang_tam[$i] .','; 
  }


  ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sắp xếp mảng trong PHP</title>
</head>
<body>
<?php
  $color= array('$color1','$color2','$color3','$color4');
  sort($color, SORT_NATURAL|SORT_FLAG_CASE);// đây là hàm sắp xếp cho các giá trị 
  foreach ($color as $k=>$v){
  	echo "Color[" . $k . "] = " . $v . "<br>";
  }
  ?>
</body>
</html>
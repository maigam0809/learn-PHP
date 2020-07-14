<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sắp xếp mảng theo chiều ngược lại của các giá trị </title>
</head>
<body>
  <?php
  // Sắp xếp ngược lại theo chiều của mảng trong PHP theo bảng chữ cái của chữ  
  $color = array ('white','black','green','blue','yellow','pink');
  rsort($color);
  print_r($color);

  ?>
</body>
</html>
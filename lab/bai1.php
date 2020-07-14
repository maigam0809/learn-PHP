<?php
   $tien = 860000;
  if (isset($_POST['btnTT'])) {
    $a = $_POST['a'];
 
    if ($a <= 0) {
      $kq = "Bạn đã nhập sai";
    } elseif($a == 1) {
      $kq = $tien ;
    }else{
      $kq = $tien * $a ;
    }
  }

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bài 1 tính tiền khách sạn</title>
</head>
<body>
  <form action="" method="post">
    <label for="">Mời số đêm</label>
    <br>
    <input type="number" name="a" value="<?= (isset($a)? $a :"")?>" id="">
    <br>
    <button type="submit" name="btnTT">Tính tiền</button>
    <?php
    if(isset($kq)){
      echo "<br> Số tiền phải trả là : ". $kq . "<br>";
    }
    ?>
  </form>
 
</body>
</html>
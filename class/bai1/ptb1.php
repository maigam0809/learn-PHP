<?php
if (isset($_POST['btnGPT'])) {
  $a = $_POST['soa'];
  $b = $_POST['sob'];
  if ($a == 0) {
    if ($b == 0) {
      $kq = "Phương trình có vô số nghiệm.";
    } else {
      $kq = "Phương trình vô nghiệm.";
    }
  } else {
    $x = -$b/$a;
    $kq = "Phương trình có ngiệm là : $x";
  }
}
?>
<!-- kết thúc php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giả phương trình bậc 1: AX + B = 0</title>
</head>

<body>
 
  <form action="" method="post">
    <input type="number" name="soa" value="<?= (isset($a)? $a :"")?>" id="" > x +
    <input type="number" name="sob" value="<?= (isset($a)? $a :"")?>" id="" >=0
    <button type="submit" name="btnGPT">Kết quả</button>
    <?php
    if(isset($kq)){
      echo $kq . "<br>";
    }
    ?>
  </form>
  
</body>

</html>
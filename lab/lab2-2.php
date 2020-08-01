<?php
if (isset($_POST['giai'])) {
  $n = $_POST['n'];
  $tong = 0;
  echo "Các số chẵn có dạng là : ";
  for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
      $tong += $i;
      echo "$i <nbsp>";
    }
  
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tính tổng các số chẵn từ 1 đến n </title>
</head>

<body>
  <form action="" method="post">
    <label for="">Nhập số nguyên n : </label>
    <input type="number" name="n" value="<?= (isset($a) ? $n : 0) ?>" id="">
    <input type="submit" value="Tính" name="giai">
  </form>
  <?php
  
  if(isset($tong)){
    echo "Tổng của các số chẵn và là số chia hết cho 2 là : $tong";
  }
  ?>

</body>

</html>
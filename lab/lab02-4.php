<!-- tính tổng các số nguyên từ 1 đến n -->
<?php
if (isset($_POST['giaiPT'])) {
  $n = $_POST['n'];
  $i = 2;
  $kt;
  $j;
  $tong =0;
  echo "Các số nguyên tố trong khoảng từ 1 đến $n là : ";
  while ($i <= $n) {
    $kt = 1;
    if ($i != 0 && $i != 1) {
      $j = 2;
      while ($j <= $i / 2) {
        if ($i % $j == 0) {
          $kt = 0;
          break;
        }
        $j++;
      }
    } else {
      $kt = 0;
    }

    if ($kt == 1) {
      echo "$i ";
      $tong += $i;
    }
    $i++;
   
  }
  echo "<br>Tổng của các số nguyên $n là : $tong";
  return 1;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tính số nguyên n được nhập từ bàn phím</title>
</head>

<body>
  <form action="" method="post">
    <label for="">Nhập số nguyên n : </label>
    <input type="number" name="n" value="<?= (isset($a) ? $n : 0) ?>" id="">
    <br><br>
    <input type="submit" value="Tính" name="giaiPT">
  </form>


</body>

</html>
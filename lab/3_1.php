<?php
$result = ' ';
$a = isset($_POST['a']) ? (float) trim($_POST['a']) : '';
$b = isset($_POST['b']) ? (float) trim($_POST['b']) : '';
$c = isset($_POST['c']) ? (float) trim($_POST['c']) : '';
function giaiPhuongTrinh()
{
  global $result;
  if (isset($_POST['giaiPT'])) {

    $a = isset($_POST['a']) ? (float) trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float) trim($_POST['b']) : '';
    $c = isset($_POST['c']) ? (float) trim($_POST['c']) : '';
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
      if ($a == '') {
        $result = 'Bạn chưa nhập số a';
      } elseif ($b == '') {
        $result = 'Bạn chưa nhập số b';
      } elseif ($c == '') {
        $result = 'Bạn chưa nhập số c';
      } elseif ($a == 0) {
        if ($b == 0) {
          if ($c == 0) {
            $result = '<br> Phương trình vô nghiệm';
          } else {
            $result = '<br> Phương trình có vô số nghiệm';
          }
        } else {
          $result = '<br> Phương trình có nghiệm là :' . (-$b) / $a;
        }
      } elseif ($a != 0) {
        $delta = pow($b, 2) - (4 * $a * $c);
        if ($delta < 0) {
          $result = '<br> Phương trình vô nghiệm.';
        } elseif ($delta == 0) {
          $result = '<br> Phương trình có nghiệm kép : ' . (-$b) / (2 * $a);
        } else {
          $result = '<br> Phương trình có 2 nghiệm phân biệt: <br> x<sub>1</sub> = ' . (-$b + sqrt($delta)) / (2 * $a);
          $result .= '<br> x<sub>2</sub> = ' . (-$b - sqrt($delta)) / (2 * $a);
        }
      }
    } else {
      $result = "Bạn chưa chọn gì .Mời bạn chọn lại.";
    }
  }
  return $result;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giải phương trình bậc 2 với function</title>
</head>

<body>
  <form action="" method="post">
    <input type="number" name="a" id="" value="<?= (isset($a) ? $a : 0) ?>" style="width: 50px"> x <sup>2</sup> +
    <input type="number" name="b" id="" value="<?= (isset($a) ? $b : 0) ?>" style="width: 50px"> x +
    <input type="number" name="c" id="" value="<?= (isset($a) ? $c : 0) ?>" style="width: 50px"> = 0
    <br>
    <br>
    <input type="submit" value="Tính phương trình bậc 2" name="giaiPT">
  </form>
  <?php
  echo  giaiPhuongTrinh();
  ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giải phương trình bậc 2</title>
</head>

<body>
  <?php
  $result = '';
  if (isset($_POST['giaiPT'])) {
    $a = isset($_POST['a']) ? (float) trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float) trim($_POST['b']) : '';
    $c = isset($_POST['c']) ? (float) trim($_POST['c']) : '';
    // validate thông tin hàm số nhập vào
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
        $result = '<br> Phương trình có nghiệm là :'. (-$b) / $a;
      }
    } elseif ($a != 0) {
      $delta = pow($b, 2) - (4 * $a * $c);
      if ($delta < 0) {
        $result = '<br> Phương trình vô nghiệm.';
      } elseif ($delta == 0) {
        $result = '<br> Phương trình có nghiệm kép : '.(-$b) / (2 * $a);
      } else {
        $result = '<br> Phương trình có 2 nghiệm phân biệt: <br> x<sub>1</sub> = '. (-$b + sqrt($delta)) / (2 * $a);
        $result .= '<br> x<sub>2</sub> = ' . (-$b - sqrt($delta)) / (2 * $a);
      }
    }
  }


  ?>
  <form action="" method="post">
    <input type="text" name="a" id="" value="" style="width: 20px"> x <sup>2</sup> +
    <input type="text" name="b" id="" value="" style="width: 20px"> x +
    <input type="text" name="c" id="" value="" style="width: 20px"> = 0
    <br>
    <br>
    <input type="submit" value="Tính phương trình bậc 2" name="giaiPT">
  </form>
  <?php
  echo $result;
  ?>
</body>

</html>
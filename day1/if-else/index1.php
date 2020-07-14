<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bài tập 1</title>

</head>

<body>
  <?php
  $result = '';
  if (isset($_POST['giaiPT'])) {
    $a = isset($_POST['a']) ? (float) trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float) trim($_POST['b']) : '';
    // validate thông tin thanh toán
    if ($a == '') {
      $result = 'Bạn chưa nhập số a';
    } elseif ($b == '') {
      $result = 'Bạn chưa nhập số b';
    } elseif ($a == 0) {
      if ($b == 0) {
        $result = 'Phương trình vô nghiệm';
      } else {
        $result = 'Phương trình có vô số nghiệm';
      }
    } else {
      $result = - ($b) / $a;
    }
  }
  ?>
  <h1>Giải Phương trình bậc một</h1>
  <form method="post" action="#">
    <input type="text" style="width: 20px" name="a" value=""  />x +
    <input type="text" style="width: 20px" name="b" value=""  /> = 0
    <br><br>
    <input type="submit" value="Tính" name="giaiPT">
  </form>
  <?php
  echo $result;
  ?>
</body>

</html>
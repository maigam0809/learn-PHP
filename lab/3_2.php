<?php
$n;
$tong;
function tinhTong()
{
  global $tong;
  global $n;
  $tong = 0;
 
  if (isset($_POST['giai'])) {
    $n = $_POST['n'];
    if (isset($_POST['n'])) {
      for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
      }
    } else {
      $tong = "Bạn cần nhập số để chương trình hoạt động.";
    }
   
  }
  return $tong;
}
echo 'Kết quả là: '. tinhTong();
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
    <input type="number" name="n" value="<?= (isset($n) ? $n : 0) ?>" id="">
    <input type="submit" value="Tính" name="giai">
  </form>
 

</body>

</html>
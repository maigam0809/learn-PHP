<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tìm các giá trị cảu mảng liên hợp trong PHP</title>
</head>

<body>
  <?php
  function tim_gia_tri($arra1, $search)
  {
    reset($arra1);
    while (list($key, $val) = each($arra1)) {
      if (preg_match("/$search/i", $val)) {
        echo $search . " được tìm thấy tại key: " . $key . "<br>";
      } else {
        echo $search . " không được tìm thấy tại key: " . $key . "<br>";
      }
    }
  }
  $exercises = array("part1" => "PHP array", "part2" => "PHP String", "part3" => "PHP Math");
  tim_gia_tri($exercises, "Math");
  ?>
</body>

</html>
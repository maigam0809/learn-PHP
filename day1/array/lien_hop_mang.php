<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tạo liên hợp mangr trong PHP</title>
</head>

<body>
  <?php
  // khai báo liên hợp mảng trong PHP
  $mang_lien_hop = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Austria" => "Vienna", "Poland" => "Warsaw"
  );
  // sắp xếp mảng liên hợp
  arsort($mang_lien_hop);

  // lặp qua các phần tử trong mảng
  foreach ($mang_lien_hop as $contry =>$capital) {
    echo "Thủ đô của $contry là $capital . <br>";
  }
  ?>

</body>

</html>
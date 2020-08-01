<?php
  $arr = [
    ['id' => 1,'name' => 'Nguyễn văn Nam','email' => 'namnv@gmail.com','address' => 'Hòa Bình'],
    ['id' => 2,'name' => 'Lê Quang Long','email' => 'longlq@gmail.com','address' => 'Hòa Bình'],
    ['id' => 3,'name' => 'Trinh Lê Ninh','email' => 'Ninhtl@gmail.com','address' => 'Hà Nam'],
    ['id' => 4,'name' => 'Bùi Đúc Huy','email' => 'huybh@gmail.com','address' => 'Hà Nội'],
    ['id' => 5,'name' => 'Lưu quang điệp','email' => 'dienlq@gmail.com','address' => 'Thái Bình']
  ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Viết chương trình được in ra mảng như sau</title>
  <style>
    body{
      width: 600px;
      margin: 0 auto;
      margin-top: 70px;
    }
    table {
      border: 1px solid black;
    }

    th ,td{
      border: 1px solid black;
      padding: 20px;

    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Địa chỉ</th>
    </tr>
    <?php
    foreach ($arr as $items) {
      echo "<tr>";
      foreach ($items as $td) {
        echo "<td> $td </td>";
      }
      echo "</tr>";
    }
    ?>
    
  </table>



</body>

</html>
<?php
require_once '../connection.php';
$sql = "SELECT * FROM tac_gia";
$stmt = $conn->prepare($sql);
// thực hiện
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bảng tác giả</title>
  <style>
 *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body{
      width: 1000px;
      margin: 0px auto;
    }
    table{
      border: 1px solid brown;
  
    }

    h2{
      color: black;
      font-size: 28px;
      text-align: center;
      padding: 20px;
      font-family: 'Asap', sans-serif;
      text-transform: capitalize;
    }
    th{
      background-color: yellow;
      padding: 10px;

    }
    td{
      padding: 5px;
    }
    
    .btn a{
      text-decoration: none;
      color:white;
      font-size: 16px;
      font-weight: bold;
      background-color: red;
      padding:10px;
      border:none;
      border-radius: 20px;
      
    }
    .btn a:hover{
      background-color: brown;
    }
    table{
      margin-top: 20px;
      width: 100%;
      text-align: center;
    }
  </style>
</head>
<body>
  <h2>Bảng tác giả</h2>
  <div class="btn">
    <a href="tac_gia_them.php">Thêm dữ liệu tác giả</a>
  </div>
  <table border="1">
    <tr>
      <th>Mã tác giả</th>
      <th>Tên tác giả</th>
    </tr>
   <?php foreach($result as $item) :?>
    <tr>
      <td><?= $item['ma_tac_gia'] ?></td>
      <td><?= $item['ten_tac_gia'] ?></td>
    </tr>
   <?php endforeach; ?>
  </table>
  
</body>
</html>

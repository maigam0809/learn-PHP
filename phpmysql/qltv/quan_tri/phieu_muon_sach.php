<?php
require_once "../connection.php";
$sql = "SELECT * FROM phieu_muon_sach";
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
  <title>Bảng sách</title>
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
  <h2>Bảng Phiếu mượn sách</h2>
  <div class="btn">
    <a href="phieu_muon_sach_them.php">Thêm phiếu mượn sách</a>
  </div>
  <table border="1">
    <tr>
      <th>Mã phiếu</th>
      <th>Ngày mượn sách</th>
      <th>Ngày trả</th>
      <th>Mã sinh viên</th>
      
    </tr>
   <?php foreach($result as $item) :?>
    <tr>
      <td><?= $item['ma_phieu'] ?></td>
      <td><?= $item['ngay_muon_sach'] ?></td>
      <td><?= $item['ngay_tra'] ?></td>
      <td><?= $item['ma_sinh_vien'] ?></td>
    </tr>
   <?php endforeach; ?>
  </table>
  
</body>
</html>

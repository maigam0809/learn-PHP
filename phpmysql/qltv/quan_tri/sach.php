<?php
require_once "../connection.php";
$sql = "SELECT * FROM sach";
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
  <h2>Bảng sách</h2>
  <div class="btn">
    <a href="sach_them.php">Thêm sách</a>
  </div>
  <table border="1">
    <tr>
      <th>Mã sách</th>
      <th>Tiêu đề sách</th>
      <th>Mã tác giả</th>
      <th>Mã xuất bản</th>
      <th>Số trang</th>
      <th>Số lượng bản sao</th>
      <th>Giá tiền</th>
      <th>Ngày nhập kho</th>
      <th>Vị trí sách</th>
      <th>Mã loại sách</th>
      
    </tr>
   <?php foreach($result as $item) :?>
    <tr>
      <td><?= $item['ma_sach'] ?></td>
      <td><?= $item['tieu_de'] ?></td>
      <td><?= $item['ma_tac_gia'] ?></td>
      <td><?= $item['ma_xuat_ban'] ?></td>
      <td><?= $item['so_trang'] ?></td>
      <td><?= $item['so_luong_ban_sao'] ?></td>
      <td><?= $item['gia_tien'] ?></td>
      <td><?= $item['ngay_nhap_kho'] ?></td>
      <td><?= $item['vi_tri_dat_sach'] ?></td>
      <td><?= $item['ma_loai_sach'] ?></td>
    </tr>
   <?php endforeach; ?>
  </table>
  
</body>
</html>

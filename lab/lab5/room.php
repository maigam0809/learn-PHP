<?php
  require_once "../connection.php";
  $sql = 'select * from rooms';// câu lệnh sql select\
  echo $sql;
  // chuẩn bị
  $stmt = $conn->prepare($sql);
  // Thực hiện
  $stmt->execute();
  //Lấy dữ liệu ra bằng trong đó fetch-assoc lấy về dạng bảng khóa là tên cột giữ liệu 
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>danh mục hiển thị danh sách rooms</title>
  <style>
    body{
      width: 1000px;
      margin: 0 auto;
    }
    table{
      width: 100%;
      text-align: center;
    }
  </style>
</head>
<body>
  <h2>Tiêu đề của danh mục sản phẩm </h2>
  <a href="room_them.php">Thêm danh mục</a>
  <table border="1">
    <tr>
      <th>Room ID</th>
      <th>Name</th>
      <th>Hotel ID</th>
      <th>Price</th>
      <th>Image</th>
      <th>Detail</th>
      <th>Status</th>
      <th>Sửa đổi</th>
    </tr> 
    <!-- Đổ dữ liệu từ bảng vào  -->
    <?php
    foreach($result as $item): ?>
    <tr>
      <td><?= $item['room_id']?></td>
      <td><?= $item['name']?></td>
      <td><?= $item['hotel_id']?></td>
      <td><?= $item['price']?></td>
      <td><img src="../images/<?=$item['image']?>" width="120px" alt="" srcset=""></td>
      <td><?= $item['detail']?></td>
      <td><?= $item['status']?></td>
      <td>
        <a href="room_sua.php?id=<?=$item['room_id']?>">Sửa</a>
        <a onclick="return confirm('Bạn có chắc chắn xóa không ?')" href="xoa_room.php?id=<?=$item['room_id']?>">Xóa</a>
      </td>
    </tr>
    <?php endforeach; ?>

  </table>
  
</body>
</html>
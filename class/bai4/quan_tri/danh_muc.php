<?php
  require_once "../connection.php";
  $sql = 'select * from categoriees';// câu lệnh sql select\
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
  <title>danh mục hiển thị danh sách sản phẩm</title>
</head>
<body>
  <h2>Tiêu đề của danh mục sản phẩm </h2>
  <a href="them_danh_muc.php">Thêm danh mục</a>
  <table border="1">
    <tr>
      <th>Mã danh mục</th>
      <th>Tên danh mục</th>
      <th>Hình ảnh</th>
      <th>Mô tả</th>
      <th>Hành động</th>
    </tr> 
    <!-- Đổ dữ liệu từ bảng vào  -->
    <?php
    foreach($result as $item): ?>
    <tr>
      <td><?= $item['cate_id']?></td>
      <td><?= $item['cate_name']?></td>
      <td><img src="../images/<?=$item['cate_image']?>" width="120px" alt="" srcset=""></td>
      <td><?=$item['description']?></td>
      <td>Action</td>
    </tr>
    <?php endforeach; ?>

  </table>
  
</body>
</html>